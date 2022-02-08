<?php
namespace App\Controllers;

use App\Core\Form;

class UsersController extends Controller
{
    public function login(){
        $form = new Form;

        $form->debutForm('get', 'login.php')
                ->finForm();

    }
}