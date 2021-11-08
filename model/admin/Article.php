<?php

class Article extends Database{

    public function __construct(array $array = null, array $file = null, string $location){
        parent::__construct();
        if(!empty($array)){
            foreach($array as $key => $value){
                $this->$key = htmlentities($value, ENT_QUOTES, "UTF-8");
            }
        }
        $this->file = $file['image'] ?? null;
        $this->location = $location ?? null;
    }

    public function create(){
        /**
         * File verifiction
         */
        if(!empty($this->file)){
            if($this->file['size'] < 10000000 && $this->file['error'] === UPLOAD_ERR_OK){
                $temp_path = $this->file['tmp_name'];
                $picture_name = $this->file['name'];
                $picture_name_split = explode(".", $picture_name);
                $extension = strtolower(end($picture_name_split));
                if(in_array($extension, ['jpg', 'jpeg', 'bmp', 'gif', 'png', 'svg'])){
                    $picture_hash_name = md5(time() . $this->file['name']) . '.' . $extension;
                    $path = UPLOADS . $this->location . '/' . $picture_hash_name;
                    $dbpath = 'assets/uploads/' . $this->location . '/' . $picture_hash_name;
                    if(move_uploaded_file($temp_path, $path)){
                        $upload = 'OK';
                    }
                    else return 'transfer_error';
                }
                else return 'invalid_type';
            }
            else return 'invalid_size';
        }
        /**
         * Insert into DB
         */
        if(!empty($this->titre) && !empty($this->sous_titre) && $upload === 'OK'){
            $stmt = self::$db->prepare(
                "INSERT INTO $this->location ( `image_path`, `image_name`, `titre`, `sous_titre` )
                VALUES ( ?, ?, ?, ?);"
            );
            $stmt->execute([$dbpath, $this->image_name, $this->titre, $this->sous_titre]);
            return 'article_success';
        }
    }
}
