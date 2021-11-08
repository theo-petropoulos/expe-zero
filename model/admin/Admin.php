<?php

class Admin extends Database{

    public function __construct(){
        parent::__construct();

    }

    public function setNewPassword(array $array){
        if($array['password'] === $array['cpassword']){
            if($this->verifyPwd($array['password'])){
                $stmt = self::$db->prepare(
                    'UPDATE `admin` SET `password` = ?'
                );
                $stmt->execute([password_hash($array['password'], PASSWORD_DEFAULT)]);
                return 'valid_password';
            }
            else return 'invalid_password';
        }
        else return 'invalid_match';
    }

    protected static function verifyPwd(string $password){
        if( !preg_match('@[A-Z]@', $password) || !preg_match('@[a-z]@', $password) ||
			!preg_match('@[0-9]@', $password) || !preg_match('@[^\w]@', $password) ||
			strlen($password)<8 ){
				return 0;
			}
		else{
			return 1;
		}
    }
}