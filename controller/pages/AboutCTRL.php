<?php

class AboutCTRL extends Database{

    public function __construct(){
        require MODEL . 'data/Fetcher.php';
        $content = [];
        $fetcher = new Fetcher('medias');
        $content['medias'] = $fetcher->fetchArticles();
        $fetcher = new Fetcher('partenaires');
        $content['partenaires'] = $fetcher->fetchArticles();
        require VIEW . 'pages/about.php';
    }
}