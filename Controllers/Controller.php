<?php
namespace App\Controllers;

class Controller
{
    public function render(string $fichier, array $donnees = [], string $template = 'default')
    {
        //On extrait le contenu de $donnees
        extract($donnees);

        //On démarre le buffer de sortie
        ob_start();
        //A partir de ce point, toute sortie est conservée en mémoire

        //On crée le chemin vers la vue
        require_once ROOT. '/Views/'. $fichier. '.php';

        //On transfère le buffer dans $contenu
        $content = ob_get_clean();

        require_once ROOT. '/Views/default.php';



    }
}