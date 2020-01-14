<?php
    class Database{

        // variables
        public $stmt;
        public $dbh;

        // database conncetion setting
        public function __construct() {
            $dsn = "mysql:host=".dbhost.";dbname=".dbname.";charaset=".charaset;
            $option = array( PDO::ATTR_PERSISTENT => true ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION );

            try{
                $this->dbh = new PDO($dsn,dbusername,dbpassword,$option);
                return $this->dbh;
            }
            catch(PDOException $e){
                die($e->getMessage());
            }

        }

        // this query the database
        public function query($sql)
        {
            $this->stmt = $this->dbh->papare($sql);
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

        public function rowCount()
        {
            return $this->stmt->rowCount();
        }

    }