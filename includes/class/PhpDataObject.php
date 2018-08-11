<?php
/**
 * Created by PhpStorm.
 * User: Nitish Kumar
 * Date: 8/11/2018
 * Time: 1:41 PM
 */
require_once "../database/dbh.php";
class PhpDataObject
{
    public $connection;
    private $parameters;
    private $connected=False;
    private $query_string = "";
    private $bindValues = array();
    private $query;
    private $error = FALSE;
    private $results;
    private $count = 0;
    private $lastId;

    /**
     * PhpDataObject constructor.
     * @throws Exception
     */
    public function __construct()
    {
        $this->db_connect();
        $this->parameters = array();

    }

    /**
     * @throws Exception
     */
    public function db_connect(){
        try{
            $this->connection = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
            $this->connected = TRUE;
        }
        catch (PDOException $exception){
            throw new Exception($exception->getMessage());
        }
    }

    /**
     *
     */
    public function disconnect(){
        $this->connected = FALSE;
        $this->$this->connection = NULL;
    }

    /**
     * @param $query
     * @param array $params
     * @return
     * @throws Exception
     */
    public function getRow($query, $params = []){
        try{
            $stmt = $this->connection->prepare($query);
            $stmt = $this->connection->exec($params);
            return $stmt->fetch();
        }
        catch (PDOException $exception){
                throw new Exception($exception->getMessage());
        }
    }

    /**
     * @param $query
     * @param array $params
     * @return mixed
     * @throws Exception
     */
    public function getRows($query, $params= []){
        try{
            $stmt = $this->connection->prepare($query);
            $stmt = $this->connection->exec($params);
            return $stmt->fetch();
        }
        catch (PDOException $exception){
            throw new Exception($exception->getMessage());
        }
    }

    /**
     * @param $query
     * @param array $params
     * @throws Exception
     */
    public function Insert($query, $params=[]){
        $this->getRows($query,$params);
    }

    /**
     * @param $query
     * @param array $params
     * @throws Exception
     */
    public function Update($query, $params=[]){
        $this->getRows($query,$params);
    }

    /**
     * @param $query
     * @param array $params
     * @throws Exception
     */
    public function Delete($query, $params=[]){
        $this->getRows($query,$params);
    }

    public function query($sql, $parameters = array()){
        $this->error = FALSE;

        if ($this->query = $this->connection->prepare($sql)){
            $i = 1;
            foreach ($parameters as $param){
                $this->query->bindValue($i,$param);
            }
            if ($this->query->execute()){
                $this->results = $this->query->fetchAll(PDO::FETCH_ASSOC);
                $this->count = $this->query->rowCount();
                $this->lastId = $this->query->lastInsertedId();
            } else {
                $this->error = TRUE;
            }
        }
        return $this;
    }


    public function select($fields = "*"){
        $action = "";
        $this->query_string = "";
        if (is_array($fields)){
            $action = "SELECT ";
            for ($i = 0;$i < count($fields); $i++){
                $action .=$fields[$i];
                if ($i != count($fields) - 1)
                    $action .=',';
            }
        }else{
            $action = "SELECT * ";
        }
        $this->query_string .= $action;
        return $this;
    }

    public function from($table){
        $this->query_string .= " FROM ($table)";
        return $this;
    }

    public function where($where = array()){
        $keys = array_keys($where);
        $action = " WHERE ";
        for ($i = 0 ;$i < count($keys);$i++){
            $action .=$keys[$i] . ' = ?';
            if ($i < count($keys) - 1)
                $action .=' AND ';
            $this->bindValues[] = $where[$keys[$i]];
        }
        $this->query_string .=$action;
        return $this;
    }

    public function execute(){
        if (!empty($this->query_string))
            $this->query($this->query_string,$this->bindValues);
        $this->bindValues = array();
    }
}

$database = new PhpDataObject();
