<?php

class Fetcher extends Database{

    public function __construct(string $table = null){
        parent::__construct();
        $this->table = htmlentities($table, ENT_QUOTES, "UTF-8");
    }

    public function fetchArticles(){
        if($this->table !== 'medias')
            $query = "SELECT `id`, `image_path`, `image_name`, `titre`, `sous_titre` FROM $this->table";
        else if($this->table === 'medias')
            $query = "SELECT `id`, `image_path`, `image_name`, `categorie_name`, `categorie_id`, `lien` FROM $this->table ORDER BY `categorie_id`";
        $stmt = self::$db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}