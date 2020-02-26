<?php 
    /*
        * PDO database class
        * DB connections
        * Prepared statements
        * Value binding
        * returning rows, result, objects
    */

    class Database {
        
// db parameters
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $dbname = DB_NAME;
// usefull connection parameters
        private $dbh;
        private $stmt;
        private $error;

        public function __construct(){

            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
            $options = array(
                // checking for existing connection and using it | better resource management
                PDO::ATTR_PERSISTENT => true,
                // error handling mode
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

            );

            // Create a PDO instance
            try{

                $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);

            }catch(PDOException $e){

                $this->error = $e->getMessage();
                echo $this->error;

            }
        }


        //prepare statement with query
        public function query($sql){
            $this->stmt = $this->dbh->prepare($sql);
        }

        // bind values
        public function bind($param, $value, $type){

            
                    switch($type){
                    case "boolean":
                        $type = PDO::PARAM_BOOL;
                        break;
                    case "integer":
                        $type = PDO::PARAM_INT;
                        break;
                    case "NULL":
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;
                 }
            
            


            $this->stmt->bindValue($param, $value, $type);
        }
        
        // execute the prepared statement
        public function execute(){
            return $this->stmt->execute();
        }

        // Get result set as array of objects
        public function resultSet(){
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }

        // Get single record as obj
        public function singleResult(){
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_OBJ);
        }

        // get row count
        public function rowCount(){
            return $this->stmt->rowCount();
        }


    }