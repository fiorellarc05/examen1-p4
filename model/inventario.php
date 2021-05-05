<?php

/**
 * Description of products database
 *
 * @author Fiorella Rodriguez
 */
require_once 'connection.php';

    class inventario {
        private $codigo_p; //gets the product code
        public $nombre_p; //gets the product name
        public $descripcion_p; //gets the product description
        public $precio_p; //gets the product price
        public $cantidad_p; //gets the product quantity
        private $id_c; //gets the category id

    /**
   * Constructor method
   * @param integer $pcodigo_p
   * @param string $pnombre_p
   * @param string $pdescripcion_p
   * @param integer $pcantidad_p
   * @param integer $pprecio_p 
   * @param integer $pid_c
   */    
        
    public function __construct($pnombre_p= " ",$pdescripcion_p= " ",$pprecio_p= " ", $pcantidad_p= " ",$pid_c= 0, $pcodigo_p = 0){

        $this->nombre_p = $pnombre_p;
        $this->descripcion_p = $pdescripcion_p;
        $this->precio_p = $pprecio_p;
        $this->cantidad_p = $pcantidad_p;
        $this->id_c = $pid_c;
        $this->codigo_p = $pcodigo_p;
    }

    /**
    * Create method: create rows with the entered values in the table of the datebase
    * @return bool false
    */
    
    public function create() {
        try{ //opnes the try catch
        $sql = "INSERT INTO productos(codigo_p, nombre_p, descripcion_p, precio_p, cantidad_p, id_c) VALUES"
                . " (NULL, '$this->nombre_p', '$this->descripcion_p', '$this->precio_p', '$this->cantidad_p', '$this->id_c')";
        
        
        $con= new connection(); //calls the connection class
        $pdo = $con->connect(); //opens the connection
        $estado = $pdo->prepare($sql); //prepare the sentence
        $estado->execute(); //saves the sentence in the variable
      
    } catch (PDOException $exc) { //catch errors
      print_r("Error en la funcion".__FUNCTION__." en el archivo".__FILE__." con el error ".$exc->getMessage());
      error_log("Error en la funcion".__FUNCTION__." en el archivo".__FILE__." con el error ".$exc->getMessage());
    }
    return false;
    }
    
    /**
    * Read method: read the all the rows of the database
    * @return the rows
    */
    
    public function read($codigo_p = 0){
        $rows = []; //saves in the data base
        try{ //opens the try catch
            $sql = "SELECT * FROM productos";
            $con = new connection(); //calls the connection class
            $pdo = $con->connect(); //opens the connection
            if($codigo_p){
                $sql .=" where codigo_p='$codigo_p'";
            }
            $result = $pdo->query($sql);

            foreach ($result->fetchAll() as $value){ //returns all the elements from the data base
                $rows [] = new inventario($value['nombre_p'],$value['descripcion_p'],$value['precio_p'],$value['cantidad_p'],$value['id_c'],$value['codigo_p']);
            }

        }catch(PDOException $ex){ //catch errors
            die($ex->getMessage());
        }
        return $rows; // returns all the elements inside rows
    }
    
    /**
    * Delete method: delete the rows of the database
    * @return the query
    */
    public function delete($codigo_p = 0 ){
        $codigo_p =  ($codigo_p) ? $codigo_p : $this->codigo_p;
        $sql = "DELETE FROM productos WHERE codigo_p = '$codigo_p'";

        $con = new connection(); //calls the connection class
        $pdo = $con->connect(); //opens the connection 
        return $pdo->query($sql); //saves the sentence in the variable
    }
  
    /**
    * Update method: update the rows of the database
    * @return the query
    */
    public function update(){
        $sql = "UPDATE productos SET nombre_p = '$this->nombre_p', descripcion_p = '$this->descripcion_p',"
            . " precio_p = '$this->precio_p', cantidad_p ='$this->cantidad_p' WHERE codigo_p = '$this->codigo_p'";

        $con = new connection(); //calls the connection class
        $pdo = $con->connect(); //opens the connection
        return $pdo->query($sql); //saves the sentence in the variable
    }
    
    /**
    * cat_prod method: Shows the products of the data base based on the category id
    * @return the rows
    */
    public function cat_prod($id_c = 0) {
       $rows = [];
       try{ //opens the try catch
            $sql = "SELECT * FROM productos";
            if($id_c){
                $sql .=" WHERE id_c = '$id_c'";
            }
            
            $con = new connection(); //calls the connection class
            $pdo = $con->connect(); //opens the connection
            $result = $pdo->query($sql); //saves the sentence in the variable

            foreach ($result->fetchAll() as $value){ //returns all the elements from the data base
                $rows [] = new inventario($value['nombre_p'],$value['cantidad_p'],$value['id_c'],$value['codigo_p']);
            }

        }catch(PDOException $ex){ //catch errors
            die($ex->getMessage());
        }
        return $rows; // returns all the elements inside rows
    }
    
    /**
    * Cantidad method: select the products that have less than 5 of quantity
    * @return the rows
    */
    public function cantidad(){
        $rows = []; //saves in the data base
        try{ //opens the try catch
            $sql = "SELECT * FROM productos WHERE cantidad_p < 5";
            $con = new connection(); //calls the connection class
            $pdo = $con->connect(); // opens the connection
            $result = $pdo->query($sql);

            foreach ($result->fetchAll() as $value){ //returns all the elements from the data base
                $rows [] = new inventario($value['nombre_p'],$value['descripcion_p'],$value['precio_p'],$value['cantidad_p'],$value['id_c'],$value['codigo_p']);
            }
        
        }catch(PDOException $ex){ //catch errors
            die($ex->getMessage());
        }
        return $rows; // returns all the elements inside rows
    }
    
    /**
    * Get Attribute method: gets the id of the product from the database
    * @return NULL
    */
    
    public function get_attribute($codigo_p){
        try{
          return $this->codigo_p;
        } catch (Exception $ex) {
          return NULL;
        }
    }
    
}
