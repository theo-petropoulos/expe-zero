<?php
require_once '_config.php';
require_once 'vendor/autoload.php';
$f3 = \Base::instance();
$f3->set('JAR.domain', $_SERVER['HTTP_HOST']);

require_once CONTROLLER . 'data/SessionCTRL.php';
$session = new SessionCTRL();

require_once REQUIRES . 'head.php';
require_once REQUIRES . 'header.php';

/** 
 * Admin page
 */
$f3->route('GET /admin',
    function($f3){
        echo "<title>Administration</title>";
        $f3->set('action', 'admin_access');
        require_once 'controller/admin/AdminCTRL.php';
        $page = new AdminCTRL();
    }
);

$f3->route('POST /admin',
    function($f3){
        echo "<title>Administration</title>";
        $f3->set('action', 'admin_login');
        require_once 'controller/admin/AdminCTRL.php';
        $page = new AdminCTRL();
    }
);

$f3->route('GET /admin/modify_@item', 
    function($f3, $params){
        echo "<title>Administration</title>";
        $f3->set('action', 'modify_form');
        $f3->set('item', $params['item']);
        require_once 'controller/admin/AdminModifyierCTRL.php';
        $page = new AdminModifyierCTRL();
        echo "<script src ='" . SCRIPTS . 'admin.js' . "'></script>";
    }
);

$f3->route('POST|PUT /admin/modify_@item', 
    function($f3, $params){
        echo "<title>Administration</title>";
        $f3->set('action', 'modify_send');
        $f3->set('item', $params['item']);
        require_once 'controller/admin/AdminModifyierCTRL.php';
        $page = new AdminModifyierCTRL();
        echo "<script src ='" . SCRIPTS . 'admin.js' . "'></script>";
    }
);

/** 
 * Home page
 */
$f3->route('GET /',
    function($f3){
        echo "<title>Accueil</title>";
        require_once 'controller/pages/IndexCTRL.php';
        $page = new IndexCTRL();
    }
);

/** 
 * Challenges page
 */
$f3->route('GET /defis',
    function($f3){
        echo "<title>Défis</title>";
        require_once 'controller/pages/DefisCTRL.php';
        $page = new DefisCTRL();
    }
);

/** 
 * Services page
 */
$f3->route('GET /services',
    function($f3){
        echo "<title>Services</title>";
        require_once 'controller/pages/ServicesCTRL.php';
        $page = new ServicesCTRL();
    }
);

/** 
 * Services page
 */
$f3->route('GET /about',
    function($f3){
        echo "<title>À Propos</title>";
        require_once 'controller/pages/AboutCTRL.php';
        $page = new AboutCTRL();
        echo "<script src ='" . SCRIPTS . 'carousel.js' . "'></script>";
    }
);

/** 
 * Aventures page
 */
$f3->route('GET /aventures',
    function($f3){
        echo "<title>Aventures</title>";
        require_once 'controller/pages/AventuresCTRL.php';
        $page = new AventuresCTRL();
    }
);

/** 
 * Expeditions page
 */
$f3->route('GET /contact',
    function($f3){
        echo "<title>Contact</title>";
        require_once 'controller/pages/ContactCTRL.php';
        $page = new ContactCTRL();
    }
);

$f3->run();

echo "<script src ='" . SCRIPTS . 'button.js' . "'></script>";

require_once REQUIRES . 'footer.php';
