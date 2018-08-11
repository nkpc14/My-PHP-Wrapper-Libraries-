<?php
/**
 * Created by PhpStorm.
 * User: Nitish Kumar
 * Date: 8/5/2018
 * Time: 12:11 AM
 */

require_once "../database/dbh.php";


class Database {

    public $connection;

    function __construct()
    {
        $this->db_connect();
    }

    public function db_connect(){
        $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if ($this->connection->connect_errno){
            die("DATABASE CONNECTION FAILED".$this->connection->connect_error);
        }
    }

    public function query($query){
        return $this->connection->query($query);
    }

    private function confirm_query($result){
        if(!$result){
            die("Query Failed");
        }
    }
    //Escape string


    //Gets the last inserted id
    public function insert_id(){
        return $this->connection->insert_id;
    }

    private function fetch($mysql){
        $row = $this->connection->fetch_assoc($mysql);
        return $row;
    }

    private function insert($map){
        $stmt = "";
    }
}


$database = new Database();
