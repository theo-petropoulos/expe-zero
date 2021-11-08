<?php

abstract class Database{
    protected static $db;
    protected static $link;

    public function __construct(){
        self::$link = new DB\SQL(
            'mysql:host=localhost;port=3306;',
            'root',
            ''
        );
        self::$link->query('CREATE DATABASE IF NOT EXISTS `expe-zero` CHARACTER SET utf8mb4');
        self::$db = new DB\SQL(
            'mysql:host=localhost;port=3306;dbname=expe-zero',
            'root',
            ''
        );
        $query = (
            "SELECT COUNT(DISTINCT `table_name`) AS `tables` 
            FROM `information_schema`.`columns` 
            WHERE `table_schema` = 'expe-zero'");
        $exist = self::$db->query($query);
        $exist = $exist->fetch(PDO::FETCH_ASSOC);
        if($exist['tables']<1){
            $sql= file_get_contents( MODEL . 'data/expe-zero.sql');
            $sql_cr= self::$db->exec($sql);
        }
    }
}