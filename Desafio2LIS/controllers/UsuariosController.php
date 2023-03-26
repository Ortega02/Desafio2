<?php
require_once 'Principal.php';
require_once './models/UsuariosModel.php';

class UsuariosController extends Principal{

    public function validate(){
        $model=new UsuariosModel();
        $user=$_POST['correo'];
        $pass=$_POST['contraseña'];
        
        if(!empty($model->validateUser($user,$pass))){
            $login_data=$model->validateUser($user,$pass);
            $login_data=$login_data[0];
            $_SESSION['login_data']=$login_data;
            header('location:http://localhost/Desafio2LIS/?c=Principal&a=inicio');
           // 
        }
        else{
            header('location:http://localhost/Desafio2LIS/');
        }
    }
}