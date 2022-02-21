<?php
namespace App\Controllers;
use App\Models\PostsModel;
use App\Models\CommentsModel;
use App\Core\Form;
use DateTime;

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
    public function admin()
    {
        //On instancie le model de la table 'posts'
        $postsModel = new PostsModel;

        //On va chercher toutes les annonces
        $posts = $postsModel->findAll();

        //On génère la vue
        $this->render('../Views/Posts/admin', compact('posts'));

    }
    /**
     * Cette méthode affiche 1 post, les commentaires et le formulaire d'ajout des com
     *
     * @param integer $id Id de l'annonce
     * @return void
     */
    public function single(int $id)
    {
        $form = new Form;

        $form->debutForm()
                ->ajoutLabelFor('content', 'Ajoutez un commentaire')
                ->ajoutTextarea('content','', ['id'=>'content', 'class'=> 'form-control'])
                ->ajoutBouton('Ajouter', ['class'=>'btn btn-primary'])
                ->finForm();

        //On instancie le model
        $postsModel = new PostsModel;
        $commentsModel = new CommentsModel;

        //On va cherche 1 post
        $post = $postsModel->find($id);
        $comments = $commentsModel->findBy(array('id_post' => $post->id));

        //On envoie à la vue
        $this->render('posts/single', ['post' => $post, 'comments'=>$comments, 'form' => $form->create()]);

        if(isset($_SESSION['user']) && !empty($_SESSION['user']['id'])){
            //L'utilsateur est connecté
            //On vérifie si le formulaire est complet
            if(Form::validate($_POST, ['content'])){
                //On se protège contre les failles xss
                $content = strip_tags($_POST['content']);
               

                //On instancie notre modèle
                $comment = new CommentsModel;
                $post = new PostsModel;

                //On hydrate
                $comment->setAuthor($_SESSION['user']['name'])
                                ->setContent($content)
                                ->setId_post($comment->id_post);

                $comment->create();

                //On redirige
                header("Location: /posts/single");
                exit;
            }
        }else{

        }
    }

    
    /**
     * Ajouter une annonce
     *
     * @return void
     */
    public function ajouter()
    {
        //On vérifie que le formulaire est complet
        if(Form::validate($_POST, ['title', 'content'])){
            //Le formulaire est complet
            //On se protège contre les failles xss
            //strip_tags, htmlentities, htmlspecialchars
            $title = strip_tags($_POST['title']);
            $content = strip_tags($_POST['content']);
            $subTitle = strip_tags($_POST['subTitle']);

            //On instancie notre modèle
            $post = new PostsModel;

            //On hydrate
            $post->setTitle($title)
                ->setContent($content)
                ->setSubTitle($subTitle)
                ->setAuthor($_SESSION['user']['name']); 

            //On enregistre
            $post->create();

            //On redirige
            header ('Location: /posts/admin');
            exit;
        }else{
            //Le formulaire est incomplet
        }
       $form = new Form;

       $form->debutForm()
        ->ajoutLabelFor('title', 'Titre')
        ->ajoutInput('text', 'title', ['id' => 'title', 'class'=> 'form-control'])
        ->ajoutLabelFor('content', 'Contenu')
        ->ajoutTextarea('content','', ['id'=>'content', 'class'=>'form-control'])
        ->ajoutLabelFor('subTitle', 'Sous-Titre')
        ->ajoutInput('text', 'subTitle', ['id' => 'subTitle', 'class'=> 'form-control'])
        ->ajoutBouton('Ajouter', ['class'=> 'btn btn-primary'])
        ->finForm();

        $this->render('posts/ajouter', ['form' => $form->create()]);
       
    }

    /**
     * Modifier une annonce
     *
     * @param integer $id
     * @return void
     */
    public function modifier(int $id){
        //On vérifie si l'annonce existe dans la bdd
        //On instancie le model
        $postModel = new PostsModel;

        //On cherche l'annonce avec l'id $id
        $post = $postModel->find($id);

        //Si l'annonce n'existe pas, on retourne à la liste des annonces
        if(!$post){
            http_response_code(404);
            $_SESSION['erreur'] = "Le post recherché n'existe pas";
            header('Location: /admin');
            exit;
        }

        //On traite le formulaire
        if(Form::validate($_POST, ['title','content'])){
            //On se protège des failles xss
            $title = strip_tags($_POST['title']);
            $content = strip_tags($_POST['content']);
            $subTitle = strip_tags($_POST['subTitle']);

            //On stocke l'annonce
            $postModif = new PostsModel;

            //On hydrate 
            $postModif->setId($post->id)
                        ->setTitle($title)
                        ->setContent($content)
                        ->setSubTitle($subTitle);
            //On met à jour l'annonce
            $postModif->update();

            //On redirige
            header ('Location: /posts/admin');
            exit;
        }

        $form = new Form;

       $form->debutForm()
        ->ajoutLabelFor('title', 'Titre')
        ->ajoutInput('text', 'title', ['id' => 'title', 'class'=> 'form-control', 'value'=> $post->title])
        ->ajoutLabelFor('content', 'Contenu')
        ->ajoutTextarea('content',$post->content, ['id'=>'content', 'class'=>'form-control'])
        ->ajoutLabelFor('subTitle', 'Sous-Titre')
        ->ajoutInput('text', 'subTitle', ['id' => 'subTitle', 'class'=> 'form-control', 'value'=> $post->subTitle])
        ->ajoutBouton('Modifier', ['class'=> 'btn btn-primary'])
        ->finForm();

        $this->render('posts/modifier', ['form' => $form->create()]);

        
    }
    public function supprimer( int $id){
        //On instancie le model
        $postModel = new PostsModel;
        $post = $postModel->delete($id);

        //On redirige
        header('Location:/posts/admin');
    }

}