<?php

/**
 * Description of categories database
 *
 * @author Fiorella Rodriguez
 */
require_once 'connection.php';

    class categoria {
        private $id_c; //gets the category id
        public $nombre_c; // gets the category name
        public $descripcion_c; //gets the category description
        
    /**
   * Constructor method
   * @param intger $id_c
   * @param string $pnombre_c
   * @param string $pdescripcion_c
   */    
        
    public function __construct($pnombre_c= " ",$pdescripcion_c= " ",$pid_c = 0){

        $this->nombre_c = $pnombre_c;
        $this->descripcion_c = $pdescripcion_c;
        $this->id_c = $pid_c;
    }

    /**
    * Create method: create rows with the entered values in the table of the datebase
    * @return bool false
    */
    
    public function create() {
        try{ //opens the try catch
            $sql = "INSERT INTO categorias(nombre_c, descripcion_c) VALUES "
                . "('$this->nombre_c','$this->descripcion_c')";


            $con= new connection(); //calls the connection class
            $pdo = $con->connect(); // opens the connection
            $estado = $pdo->prepare($sql); //prepare the sentence
            $estado->execute(); // saves the sentence in the variable
      
        } catch (PDOException $ex) { //catch errors
            print_r("Error en la funcion".__FUNCTION__." en el archivo".__FILE__." con el error ".$ex->getMessage());
            error_log("Error en la funcion".__FUNCTION__." en el archivo".__FILE__." con el error ".$ex->getMessage());
        }
    return false;
    }
    
    /**
    * Read method: read the all the rows of the database
    * @return the rows
    */
    
    public function read($id_c = 0){
        $rows = []; //saves in the data base
        try{ //opnes the try catch
            $sql = "SELECT * FROM categorias";
            $con = new connection(); //calls the connection class
            $pdo = $con->connect(); // opens the connection
            if($id_c){
                $sql .=" where id_c = '$id_c'";
            }
            $result = $pdo->query($sql);

            foreach ($result->fetchAll() as $value){ //returns all the elements from the data base
                $rows [] = new categoria($value['nombre_c'], $value['descripcion_c'],$value['id_c']);
            }
        
        }catch(PDOException $ex){ //catch errors
            die($ex->getMessage());
        }
        return $rows; // returns all the elements inside rows
    }
    
    /**
    * Read method: delete the rows of the database
    * @return the query
    */
    public function delete($id_c  = 0){
        $id_c =  ($id_c) ? $id_c : $this->id_c;
        $sql = "DELETE FROM categorias WHERE id_c = '$id_c' ";

        $con = new connection(); //calls the connection class
        $pdo = $con->connect(); // opens the connection
        return $pdo->query($sql);
    }
     
    /**
    * Read method: update the rows of the database
    * @return the query
    */
    public function update(){
        $sql = "UPDATE categorias SET nombre_c = '$this->nombre_c', descripcion_c = '$this->descripcion_c' WHERE id_c = '$this->id_c'";

        $con = new connection(); // callsthe connection class
        $pdo = $con->connect(); // opens the connection
        return $pdo->query($sql);
    }  
    
    /**
    * Get Attribute method: gets the name of the product from the database
    * @return NULL
    */
    
    public function get_attribute($id_c){
        try{
          return $this->id_c;
        } catch (Exception $ex) {
          return NULL;
        }
    }
    
}

