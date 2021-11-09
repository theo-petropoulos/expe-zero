<?php
require '_config.php';
require 'vendor/autoload.php';
$f3 = \Base::instance();
$f3->set('JAR.domain', $_SERVER['HTTP_HOST']);

require CONTROLLER . 'data/SessionCTRL.php';
$session = new SessionCTRL();

/** 
 * Admin page
 */
$f3->route('GET /admin',
    function($f3){
        echo "<title>Administration</title>";
        $f3->set('action', 'admin_access');
        require 'controller/admin/AdminCTRL.php';
        $page = new AdminCTRL();
    }
);

$f3->route('POST /admin',
    function($f3){
        echo "<title>Administration</title>";
        $f3->set('action', 'admin_login');
        require 'controller/admin/AdminCTRL.php';
        $page = new AdminCTRL();
    }
);

$f3->route('GET /admin/modify_@item', 
    function($f3, $params){
        echo "<title>Administration</title>";
        $f3->set('action', 'modify_form');
        $f3->set('item', $params['item']);
        require 'controller/admin/AdminModifyierCTRL.php';
        $page = new AdminModifyierCTRL();
    }
);

$f3->route('POST|PUT /admin/modify_@item', 
    function($f3, $params){
        echo "<title>Administration</title>";
        $f3->set('action', 'modify_send');
        $f3->set('item', $params['item']);
        require 'controller/admin/AdminModifyierCTRL.php';
        $page = new AdminModifyierCTRL();
    }
);

/** 
 * Home page
 */
$f3->route('GET /',
    function($f3){
        echo "<title>Accueil</title>";
        require 'controller/pages/IndexCTRL.php';
        $page = new IndexCTRL();
    }
);

/** 
 * Challenges page
 */
$f3->route('GET /defis',
    function($f3){
        echo "<title>Défis</title>";
        require 'controller/pages/DefisCTRL.php';
        $page = new DefisCTRL();
    }
);

/** 
 * Services page
 */
$f3->route('GET /services',
    function($f3){
        echo "<title>Services</title>";
        require 'controller/pages/ServicesCTRL.php';
        $page = new ServicesCTRL();
    }
);

/** 
 * Services page
 */
$f3->route('GET /medias',
    function($f3){
        echo "<title>Médias</title>";
        require 'controller/pages/MediasCTRL.php';
        $page = new MediasCTRL();
    }
);

/** 
 * Expeditions page
 */
$f3->route('GET /expeditions',
    function($f3){
        echo "<title>Expéditions</title>";
        require 'controller/pages/ExpeditionsCTRL.php';
        $page = new ExpeditionsCTRL();
    }
);

/** 
 * Expeditions page
 */
$f3->route('GET /contact',
    function($f3){
        echo "<title>Contact</title>";
        require 'controller/pages/ContactCTRL.php';
        $page = new ContactCTRL();
    }
);

require REQUIRES . 'head.php';
// require REQUIRES . 'header-footer.php';
echo "<script src ='" . SCRIPTS . 'admin.js' . "'></script>";

$f3->run();