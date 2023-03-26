<?php
//interactuamos entre modelo y vista
class PrincipalController{
    
    public function index(){
        //traemos el modelo
        require_once "./models/ProductosModel.php";
        //instanciamos el modelo
        $productos=new ProductosModel();
        //traemos el método del modelo
        $info["productos"]=$productos->getProducts();
        require_once "./views/Cliente/Prinicipal.php";
        
    }
    public function carrito($id=null){
        require_once "./models/ProductosModel.php";
        $cupones=new ProductosModel();
        $info["id"]=$id;
        $info["cupones"]=$cupones->getProduct($id);
        //require_once "views/cliente/Agregar.php";
       require_once "views/cliente/Carrito.php";     
          
    }
    public function inicio(){
        //traemos el modelo
        require_once "./models/ProductosModel.php";
        //instanciamos el modelo
        $productos=new ProductosModel();
        //traemos el método del modelo
        $info["productos"]=$productos->getProducts();
        require_once "./views/Cliente/InicioSesion.php";
        
    }
    public function registro(){
        //traemos el modelo
        require_once "./models/ProductosModel.php";
        //instanciamos el modelo
        $productos=new ProductosModel();
        //traemos el método del modelo
        $info["productos"]=$productos->getProducts();
        require_once "./views/Cliente/registro.php";
        
    }
}