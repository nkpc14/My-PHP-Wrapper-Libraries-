<?php
/**
 * Created by PhpStorm.
 * User: Nitish Kumar
 * Date: 8/5/2018
 * Time: 2:24 AM
 */

require_once "../database/dbh.php";


class DataObjectDatabase
{
    public $connection;
    private $parameters;
    private $connected=False;

    function __construct()
    {
        $this->db_connect();
        $this->parameters = array();
    }

    public function db_connect(){
       try{
           $this->connection = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);
           $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
           echo "DATABASE CONNECTION COMPLETED";
           $this->connected = True;
       }
       catch(PDOException $e){
            echo "CONNECTION FAILED:".$e->getMessage();
            die();
       }
    }

    public function query($query){

        if (!$this->connected){
            $this->db_connect(); //Connect to PDO if not Connected
        }

        return $this->connection->exec($query);//Executes the query for PDO
    }

    private function confirm_query($result){
        if(!$result){
            die("Query Failed");
        }
    }
    //Escape string
    private function escape_string($data){
        return $this->connection->real_escape_string($data);
    }

    //Gets the last inserted id
    public function insert_id($query){
            $this->connection->beginTransaction(); //Begins thr transaction
            $this->connection->exec($query); //execute the query
            $this->connection->commit();//commit to upload data to the server
            echo "Insertion Done!";
    }

    private function fetch($mysql){
        $row = $this->connection->fetch_assoc($mysql);
        return $row;
    }

    private function insert($map){
        $stmt = "";
    }


    public function bind($parameters){

    }

    public function lastId($data){
        $this->connection->lastInsertId();
    }

    public function select(){

    }



}

$pdo = new DataObjectDatabase();