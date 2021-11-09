<?php

class DefisCTRL extends Database{

    public function __construct(){
        require MODEL . 'data/Fetcher.php';
        $fetcher = new Fetcher('defis');
        $content = $fetcher->fetchArticles();
        require VIEW . 'pages/aventures.php';
    }
}