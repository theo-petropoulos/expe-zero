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
        $f3->set('action', 'admin_access');
        require 'controller/admin/AdminCTRL.php';
        $page = new AdminCTRL();
    }
);

$f3->route('POST /admin',
    function($f3){
        $f3->set('action', 'admin_login');
        require 'controller/admin/AdminCTRL.php';
        $page = new AdminCTRL();
    }
);

$f3->route('GET /admin/modify_@item', 
    function($f3, $params){
        $f3->set('action', 'modify_form');
        $f3->set('item', $params['item']);
        require 'controller/admin/AdminModifyierCTRL.php';
        $page = new AdminModifyierCTRL();
    }
);

$f3->route('POST|PUT /admin/modify_@item', 
    function($f3, $params){
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
    function(){
        require 'controller/pages/IndexCTRL.php';
        $page = new IndexCTRL();
    }
);


$f3->run();