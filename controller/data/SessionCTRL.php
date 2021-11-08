<?php
session_start();
require MODEL . 'data/Database.php';

class SessionCTRL extends Database{
    
    public function __construct(){
        parent::__construct();
    }
}