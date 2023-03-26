<?php
require_once 'Model.php';
class UsuariosModel extends Model{

    public function validateUser($user,$pass){
        $query="SELECT Nombres, rol FROM usuarios
        WHERE Correo=:user AND Clave=SHA2(:pass,256)";
        return $this->getQuery($query,['user'=>$user, 'pass'=>$pass]);
    }
}