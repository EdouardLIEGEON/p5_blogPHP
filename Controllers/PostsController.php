<?php
namespace App\Controllers;
use App\Models\PostsModel;

class PostsController extends Controller
{
    /**
     * Cette méthode affichera une page listant tous les posts de la base de données
     *
     * @return void
     */
    public function index()
    {
        //On instancie le model de la table 'posts'
        $postsModel = new PostsModel;

        //On va chercher toutes les annonces
        $posts = $postsModel->findAll();

        //On génère la vue
        $this->render('../Views/Posts/index', compact('posts'));

    }
    /**
     * Cette méthode affiche 1 post
     *
     * @param integer $id Id de l'annonce
     * @return void
     */
    public function single(int $id)
    {
     //On instancie le model
     $postsModel = new PostsModel;

     //On va cherche 1 post
     $post = $postsModel->find($id);

     //On envoie à la vue
     $this->render('posts/single', compact('post'));
    }
}