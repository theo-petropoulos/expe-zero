<?php

class ServicesCTRL extends Database{

    public function __construct(){
        require MODEL . 'data/Fetcher.php';
        $fetcher = new Fetcher('services');
        $content = $fetcher->fetchArticles();
        require VIEW . 'pages/aventures.php';
    }
}