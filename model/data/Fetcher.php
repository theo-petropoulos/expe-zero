<?php

class Fetcher extends Database{

    public function __construct(string $table = null){
        parent::__construct();
        $this->table = htmlentities($table, ENT_QUOTES, "UTF-8");
    }

    public function fetchArticles(){
        $stmt = self::$db->query(
            "SELECT `id`, `image_path`, `image_name`, `titre`, `sous_titre`
            FROM $this->table"
        );
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}