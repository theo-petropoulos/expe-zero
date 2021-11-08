<?php

class AdminModifyierCTRL extends Database{

    public function __construct(){
        parent::__construct();
        $f3 = \Base::instance();
        if($f3->get('action') === 'modify_form'){
            switch($f3->get('item')){
                case 'password':
                    require VIEW . 'admin/modify/password.php';
                    break;
                case 'services':
                    require VIEW . 'admin/modify/services.php';
                    break;
                default:
                    $error = ['origin' => 'admin_modify', 'message' => 'Une erreur inattendue est survenue. 
                    Retourner à la <a href="./">page d\'administration.</a><br>'];
                    break;
            }
        }
        else if($f3->get('action') === 'modify_send'){
            switch($f3->get('item')){
                case 'password':
                    require MODEL . 'admin/Admin.php';
                    $admin = new Admin();
                    switch($admin->setNewPassword(['password' => $_POST['password'], 'cpassword' => $_POST['cpassword']])){
                        case 'invalid_match':
                            $error = ['origin' => 'admin_password', 'message' => 'Les mots de passe ne correspondent pas.<br> Veuillez <a href="">Réessayer</a>'];
                            break;
                        case 'invalid_password':
                            $error = ['origin' => 'admin_password', 'message' => 'Le mot de passe n\'est pas assez fort.<br>Veuillez <a href="">Réessayer</a>'];
                            break;
                        case 'valid_password':
                            $f3->set('success', 'password');
                            require VIEW . 'admin/modify/password.php';
                            break;
                        default:
                            $error = ['origin' => 'admin_password', 'message' => 'Une erreur inattendue est survenue. Retour à la <a href="./">page d\'administration.</a>'];
                            break;
                    }
                    break;
                case 'services':
                    require MODEL . 'admin/Article.php';
                    $article = new Article($_POST, $_FILES, 'services');
                    switch($article->create()){
                        case 'transfer_error':
                            $error = ['origin' => 'admin_upload', 'message' => 'Une erreur est survenue pendant la création de l\'article.<br>
                            L\'image n\'a pas pu être transférée dans le dossier de destination. Vérifiez l\'espace disponible puis <a href="">réessayez</a>.'];
                            break;
                        case 'invalid_type':
                            $error = ['origin' => 'admin_upload', 'message' => 'Une erreur est survenue pendant la création de l\'article.<br>
                            L\'image n\'est pas d\'un type accepté par le serveur. Pour rappel, les extensions authorisées sont jpg, jpeg, gif, bmp, svg et png.<br>
                            <a href="">Réessayer</a>'];
                            break;
                        case 'invalid_size':
                            $error = ['origin' => 'admin_upload', 'message' => 'Une erreur est survenue pendant la création de l\'article.<br>
                            Le fichier image est trop volumineux. Veuillez le redimensionner puis <a href="">réessayez</a>'];
                            break;
                        case 'article_success':
                            $f3->set('success', 'password');
                            require VIEW . 'admin/modify/services.php';
                            break;
                        default:
                            $error = ['origin' => 'admin_password', 'message' => 'Une erreur inattendue est survenue. Retour à la <a href="./">page d\'administration.</a>'];
                            break;
                    }
                    break;
                default:
                    $error = ['origin' => 'admin_modify', 'message' => 'Une erreur inattendue est survenue. 
                    Retourner à la <a href="./">page d\'administration.</a><br>'];
                    break;
            }
        }
        if(!empty($error)) require VIEW . 'error/generator.php';  
    }
}