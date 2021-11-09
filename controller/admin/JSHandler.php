<?php

if(!empty($_POST['delete']) && $_POST['delete'] == 1 && !empty($_POST['table']) && !empty($_POST['id'])){
    $jshandler = new JSHandler($_POST);
    $jshandler->delete();
}

class JSHandler{
    protected static $db;

    public function __construct(array $array){
        self::$db = new PDO('mysql:host=localhost;dbname=expe-zero', 'root', '');
        foreach($array as $key => $value){
            $this->$key = htmlentities($value, ENT_QUOTES, "UTF-8");
        }
    }

    public function delete(){
        $stmt = self::$db->prepare(
            "SELECT `image_path` 
            FROM $this->table 
            WHERE `id` = ?"
        );
        $stmt->execute([$this->id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->path = $_SERVER['DOCUMENT_ROOT'] . '/expe-zero/' . $result['image_path'];
        is_file($this->path) ? unlink($this->path) : null;
        $stmt = self::$db->prepare(
            "DELETE FROM $this->table 
            WHERE `id` = ?"
        );
        $stmt->execute([$this->id]);
    }
}