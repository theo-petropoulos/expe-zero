<?php

class AdminCTRL extends Database{

    public function __construct(){
        parent::__construct();
        $f3 = \Base::instance();
        /**
         * On landing
         */
        if($f3->get('action') === 'admin_access'){
            // Verify if there's an admin token
            if(!empty($_COOKIE['authtoken_adm'])){
                $stmt = self::$db->query(
                    'SELECT `authtoken` FROM `admin`'
                );
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                // Compare value with database
                if($result['authtoken'] === $_COOKIE['authtoken_adm']){
                    require_once VIEW . 'admin/home.php';
                }
                // Destroy cookie and redirect to home page
                else{
                    setcookie(
                        'authtoken_adm',
                        '',
                        -1,
                        '/expe-zero/'
                    );
                    $f3->reroute('/');
                }
            }
            // Else go to login form
            else{
                require_once VIEW . 'admin/form.php';
            }
        }
        /**
         * If the user is trying to log in 
         */
        else if($f3->get('action') === 'admin_login'){
            // Verify inputs
            if(!empty($_POST['admlogin']) && !empty($_POST['admpassword']) && count($_POST) === 2){
                $stmt = self::$db->query(
                    'SELECT `login`, `password` FROM `admin`'
                );
                $results = $stmt->fetch(PDO::FETCH_ASSOC);
                // Compare values with database
                if(password_verify($_POST['admlogin'], $results['login']) && password_verify($_POST['admpassword'], $results['password'])){
                    $token = $this->createAdminCookie();
                    $stmt = self::$db->prepare(
                        'UPDATE `admin` SET `authtoken` = ?;'
                    );
                    $stmt->execute([$token]);
                    $_SESSION['invalid_login'] = 0;
                    // $f3->set('action', 'admin_access');
                    $f3->reroute('/admin');
                }
                else{
                    sleep(3);
                    isset($_SESSION['invalid_login']) ? $_SESSION['invalid_login']++ : $_SESSION['invalid_login'] = 1;
                    $error = ['origin' => 'admin', 'message' => 'Identifiant ou mot de passe erroné(s). Il vous reste ' . 5 - $_SESSION['invalid_login'] . ' tentatives.<br>
                    <a href="admin">Réessayer</a>'];
                }
            }
        }
        if(!empty($error)) require VIEW . 'error/generator.php';
    }

    private function createAdminCookie(){
        $this->ip = $_SERVER['REMOTE_ADDR'];
        /**
         * Generate hash
         */
        $date = (new DateTime())->getTimeStamp();
        $start = random_int(1000,9999);
        $end = random_int(1000,9999);
        $token = $start . "-" . $date . ":" . $this->ip . "+" . $end;
        $iterations = random_int(30000,90000);
        $salt = openssl_random_pseudo_bytes(16);
        $hash = hash_pbkdf2("sha256", $token, $salt, $iterations, 32);
        /**
         * Set cookie for further authentications
         */
        $cookie_options = array(
            'expires' => time() + 36000,
            'path' => '/expe-zero/',
            'domain' => 'localhost',
            'secure' => true,
            'httponly' => false,
            'samesite' => 'Strict'
        );
        setcookie('authtoken_adm', $hash, $cookie_options);
        return $hash;
    }
}