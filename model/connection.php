<!--Database configuration-->
<?php
    include "config.php";

    /**
    * Description of connection
    */
    class connection {
        private $std;

        public function __construct() {
            $this->std = "mysql:host=localhost;dbname=".DB_NAME.";";
        }
        public function connect(){
            try{
                return new PDO($this->std,DB_USER,DB_PASSWORD);      
            } catch(PDOException $ex){
                error_log("Error en funcion".__FUNCTION__." del archivo".__FILE__." el error es: ".$ex->getMessage());
            }
            return null;
        }
    }

