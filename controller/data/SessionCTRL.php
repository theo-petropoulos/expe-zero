<?php
session_start();
require_once MODEL . 'data/Database.php';

class SessionCTRL extends Database{
    
    public function __construct(){
        parent::__construct();
    }
}