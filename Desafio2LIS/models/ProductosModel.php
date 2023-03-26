<?php
include 'Model.php';
//modelo de la principal
     class ProductosModel extends Model{
        private $db;
        private $productos;

        public function __construct(){

            //llamamos la conexion
            $this->db=Conectar::conexion();
            $this->productos=array();

        }

     //método para mostrar los productos
    public function getProducts(){
        $query = "SELECT * FROM productos";
        return $this->get($query);
    }

       
    public function getProduct($id){
      //  $query = "SELECT * FROM cuponr WHERE IdCuponR = ?";
       // return $this->getOne($query,$id);
    }    
}

?>