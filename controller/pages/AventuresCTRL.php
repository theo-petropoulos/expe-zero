<?php

class AventuresCTRL extends Database{

    public function __construct(){
        require MODEL . 'data/Fetcher.php';
        $fetcher = new Fetcher('expeditions');
        $content = $fetcher->fetchArticles();
        require VIEW . 'pages/aventures.php';
    }
}