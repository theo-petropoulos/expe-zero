<?php

class AdminModifyierCTRL extends Database{

    public function __construct(){
        parent::__construct();
        $f3 = \Base::instance();
        /**
         * If the admin is accessing a modifyer
         */
        if($f3->get('action') === 'modify_form'){
            if($f3->get('item') === 'password'){
                require VIEW . 'admin/modify/password.php';
            }
            else if($f3->get('item') === 'medias'){
                require MODEL . 'data/Fetcher.php';
                $fetcher = new Fetcher($f3->get('item'));
                $content = $fetcher->fetchArticles();
                require VIEW . 'admin/modify/media.php';
            }
            else if($f3->get('item') === 'partenaires'){
                require MODEL . 'data/Fetcher.php';
                $fetcher = new Fetcher($f3->get('item'));
                $content = $fetcher->fetchArticles();
                require VIEW . 'admin/modify/partenaires.php';
            }
            else if(in_array($f3->get('item'), ['services', 'expeditions', 'defis'])){
                require MODEL . 'data/Fetcher.php';
                $fetcher = new Fetcher($f3->get('item'));
                $content = $fetcher->fetchArticles();
                require VIEW . 'admin/modify/article.php';
            }
            else{
                $error = ['origin' => 'admin_modify', 'message' => 'Une erreur inattendue est survenue. 
                Retourner à la <a href="./">page d\'administration.</a><br>'];
            }
        }
        /**
         * If the admin is sending a modification
         */
        else if($f3->get('action') === 'modify_send'){
            /**
             * If the admin is modifying the password
             */
            if($f3->get('item') === 'password'){
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
            }
            /**
             *  If the admin is modifying an article
             */ 
            else if(in_array($f3->get('item'), ['services', 'medias', 'partenaires', 'expeditions', 'defis'])){
                require MODEL . 'admin/Article.php';
                $article = new Article($_POST, $_FILES, $f3->get('item'));
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
                        $f3->set('success', 'article');
                        $f3->reroute('/admin/modify_@item');
                        // require VIEW . 'admin/modify/article.php';
                        break;
                    default:
                        $error = ['origin' => 'admin_password', 'message' => 'Une erreur inattendue est survenue. Retour à la <a href="./">page d\'administration.</a>'];
                        break;
                }
            }
            else{
                $error = ['origin' => 'admin_modify', 'message' => 'Une erreur inattendue est survenue. 
                Retourner à la <a href="./">page d\'administration.</a><br>'];
            }
        }
        if(!empty($error)) require VIEW . 'error/generator.php';  
    }
}