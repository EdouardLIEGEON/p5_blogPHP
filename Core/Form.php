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
    public static function validate(array $form, array $champs)
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
                $str .= " $attribut='$valeur'";
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
}