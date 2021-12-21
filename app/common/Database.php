<?php
class Database
{
    public $connect ;
    private $statement;
    private $servername = "localhost";
    private $dbname = "ck_web";
    private $username ="root";
    private $pass = "";

    public function _construct(){
        $url_db = "mysql:host=".$this->servername.";dbname=".$this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        try{
            $this->connect = new PDO($url_db, $this->username, $this->pass, $options);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        }catch(PDOException $e){
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    //Return a specific row as an object
    public function single(){
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }

    //Get's the row count
    public function rowCount() {
        return $this->statement->rowCount();
    }
}
?>