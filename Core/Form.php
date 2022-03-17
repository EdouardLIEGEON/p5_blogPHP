<?php
namespace App\Core;

class Form
{
    private $formCode = '';


    /**
     * Génère le formulaire html
     *
     * @return string
     */
    public function create()
    {
        return $this->formCode;
    }

    /**
     * Valide si tous les champs sont remplis
     *
     * @param array $form Tableau issu du formulaire ($_POST, $_GET)
     * @param array $champs Tableau listant les champs obligatoires
     * @return bool
     */
    public static function validate( $form, $champs)
    {
        //On parcourt les champs
        foreach($champs as $champ){
            //Si le champs est absent ou vide dans le form
            if(!isset($form[$champ]) || empty($form[$champ])){
                //On sort en retournant false
                return false;
            }
        }
        return true;
    }

    /**
     * Ajoute les attributs envoyés à la balise
     *
     * @param array $attributs Tableau associatif
     * @return string Chaîne de caractères générée
     */
    private function ajoutAttributs(array $attributs): string
    {
        //On initialise une chaîne de caractères
        $str = '';

        //On liste les attributs "courts"
        $courts = ['checked', 'disabled', 'redonly', 'multiple', 'required', 'autofocus', 'novalidate', 'formnovalidate'];

        //On boucle sur le tableau d'attributs
        foreach($attributs as $attribut => $valeur){
            //Si l'attribut est dans la liste des attributs courts
            if(in_array($attribut, $courts) && $valeur == true){
                $str .= " $attribut";
            }else{
                //On ajoute attribut= 'valeur'
                $str .= " $attribut=\"$valeur\"";
            }
        }
        return $str;
    }

    /**
     * Balise d'ouverture du formulaire
     *
     * @param string $methode Méthode du formulaire (post ou get)
     * @param string $action Action du formulaire
     * @param array $attributs Attributs
     * @return form
     */
    public function debutForm(string $methode = 'post', string $action = '#', array $attributs = []): self
    {
        //On crée la balise form
        $this->formCode .= "<form action ='$action' method = '$methode'";

        //On ajoute les attributs éventuels
            $this->formCode .= $attributs ? $this->ajoutAttributs($attributs).'>': '>';

        return $this;
    }

    /**
     * balise de fermeture du formulaire
     *
     * @return form
     */
    public function finForm()
    {
        $this->formCode .= '</form>';
        return $this;
    }
    /**
     * Ajout d'un label
     *
     * @param string $for
     * @param string $texte
     * @param array $attributs
     * @return Form
     */
    public function ajoutLabelFor(string $for, string $texte, array $attributs = []): self
    {
        //On ouvre la balise
        $this->formCode .= "<label for='$for'";

        //On ajoute les attributs
        $this->formCode .= $attributs ? $this->ajoutAttributs($attributs) : '';

        //On ajoute le texte
        $this->formCode .= ">$texte</label>";

        return $this;
    }

    public function ajoutInput(string $type, string $nom, array $attributs = []): self
    {
        //On ouvre la balise
        $this->formCode .= "<input type='$type' name='$nom'";

        //On ajoute les attributs
        $this->formCode .= $attributs ? $this->ajoutAttributs($attributs). '>' : '>';

        return $this;
    }

    public function ajoutTextarea(string $nom, string $valeur = '', array $attributs = []): self
    {
          //On ouvre la balise
          $this->formCode .= "<textarea name='$nom'";

          //On ajoute les attributs
          $this->formCode .= $attributs ? $this->ajoutAttributs($attributs) : '';
  
          //On ajoute le texte
          $this->formCode .= ">$valeur</textarea>";
  
          return $this;
    }

    public function ajoutSelect(string $nom, array $options, array $attributs = []): self
    {
        //On crée le select
        $this->formCode .= "<select name='$nom'";

        //On ajoute les attributs
        $this->formCode .= $attributs ? $this->ajoutAttributs($attributs). '>' : '>';

        foreach($options as $valeur => $texte){
            $this->formCode .= "<option value=\"$valeur\">$texte</option>";
        }

        //On ferme le select
        $this->formCode .= '</select>';

        return $this;
    }

    public function ajoutBouton(string $texte, array $attributs = []): self
    {
        //On ouvre le bouton
        $this->formCode .= '<button';

        //On ajoute les attributs
        $this->formCode .= $attributs ? $this->ajoutAttributs($attributs): '';

        //On ajoute le texte et on ferme
        $this->formCode .= ">$texte</button>";

        return $this;
    }
}