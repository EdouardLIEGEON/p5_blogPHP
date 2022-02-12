<?php
namespace App\Models;

use App\Core\Db;

class Model extends Db
{
    // Table de la base de données
    protected $table;

    // Instance de connexion
    private $db;
    /**
 * Sélection de tous les enregistrements d'une table
 * @return array Tableau des enregistrements trouvés
 */
    public function findAll()
    {
        $query = $this->requete('SELECT * FROM '.$this->table);
        return $query->fetchAll();
    }
    /**
 * Sélection de plusieurs enregistrements suivant un tableau de critères
 * @param array $criteres Tableau de critères
 * @return array Tableau des enregistrements trouvés
 */
    public function findBy(array $criteres)
    {
        $champs = [];
        $valeurs = [];

        // On boucle pour "éclater le tableau"
        foreach($criteres as $champ => $valeur){
            $champs[] = "$champ = ?";
            $valeurs[]= $valeur;
        }

    // On transforme le tableau en chaîne de caractères séparée par des AND
    $liste_champs = implode(' AND ', $champs);

    // On exécute la requête
    return $this->requete("SELECT * FROM {$this->table} WHERE $liste_champs", $valeurs)->fetchAll();
    }

    public function find(int $id)
    {
        return $this->requete("SELECT * FROM {$this->table} WHERE id = $id")->fetch();
    }
    // Méthode pour créer les posts
    public function create()
    {
        $champs = [];
        $inter = [];
        $valeurs = [];

        // On boucle pour éclater le tableau
        foreach($this as $champ => $valeur){
            // INSERT INTO posts (titre, description, ....) VALUES (?, ?, ?)
            if($valeur !== null && $champ != 'db' && $champ != 'table'){
                $champs[] = $champ;
                $inter[] = "?";
                $valeurs[] = $valeur; 
            }
        }

        // On transforme le tableau "champs" en une chaine de caractères
        $liste_champs = implode(', ', $champs);
        $liste_inter = implode(', ', $inter);

        // On exécute la requête
        return $this->requete('INSERT INTO '.$this->table.' ('. $liste_champs.')VALUES('.$liste_inter.')', $valeurs);
    }

        // Méthode pour modifier les posts
    public function update()
    {
        $champs = [];
        $valeurs = [];

        // On boucle pour éclater le tableau
        foreach($this as $champ => $valeur){
            // UPDATE posts SET titre=?, description=?, ....) WHERE id= ?
            if($valeur !== null && $champ != 'db' && $champ != 'table'){
                $champs[] = "$champ = ?";
                $valeurs[] = $valeur; 
            }
        }
        $valeurs[] = $this->id;
        
        // On transforme le tableau "champs" en une chaine de caractères
        $liste_champs = implode(', ', $champs);

        // On exécute la requête
        return $this->requete('UPDATE '.$this->table.' SET '. $liste_champs.' WHERE id=?', $valeurs);
    }

    public function delete(int $id)
    {
        return $this->requete("DELETE FROM {$this->table} WHERE id = ?", [$id]);
    }
        /**
        * Méthode qui exécutera les requêtes
        * @param string $sql Requête SQL à exécuter
        * @param array $attributes Attributs à ajouter à la requête 
        * @return PDOStatement|false 
        */
    public function requete(string $sql, array $attributs = null)
    {
        // On récupère l'instance de Db
        $this->db = Db::getInstance();

        // On vérifie si on a des attributs
        if($attributs !== null){
            // Requête préparée
            $query = $this->db->prepare($sql);
            $query->execute($attributs);
            return $query;
        }else{
            // Requête simple
            return $this->db->query($sql);
        }
    }
    
    public function hydrate($donnees)
    {
        foreach($donnees as $key => $value){
            //On récupère le nom du setter correspondant à la clé
            // title -> setTitle
            $setter = 'set' . ucfirst($key);

            //On vérifie si le setter existe
            if(method_exists($this, $setter)){
                //On appelle le setter
                $this->$setter($value);
            }
        }
        return $this;
    }
}   