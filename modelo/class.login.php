<?php
class login
{  private $usuario;
    private $clave;
    
    function _construct($user=null,$pass=null)
    { $this->usuario=$user;
      $this->clave=$pass;
    }//fin del metodo  constructor
    
    function verificar()
    {$sql="select * from tbl_usuarios where usuario='$this->usuario' and password='$this->clave' and estado='si'";
     $conexion=new Conexion(1);
     $arreglo=$conexion->busquedas($sql);//variable que viene de objeto conexion
     return $arreglo; 
    }//fin del metodo verificar
}    
?>   