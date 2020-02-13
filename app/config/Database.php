<?php
 
class Database{
    public $stmt;
    public $dbh;
    public $error;

    public function __construct() {
        $dsn = "mysql:host=".db_host.";dbname=" . db_name;
        $option = array(
            PDO::ATTR_PERSISTENT =>true ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION );
        try {
            $this->dbh = new PDO($dsn, db_user, db_password, $option);
        } catch (PDOException $ex) {
            $this->error = $ex->getMessage();
            echo $this->error;
        }
    }

    // this query the database
    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    // this bind the value and pass it to database
    public function bind($param,$value,$type = null)
    {
        if(is_null($type)){
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }
        $this->stmt->bindvalue($param,$value,$type);
    }

    // this fetch a single data from the database
    public function Fetch()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    // fetch all row from the database
    public function FetchAll()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // getting the number of row in the database
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }

    
}