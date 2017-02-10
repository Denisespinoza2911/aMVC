<?php
class Conexion
{
   private $enlace; //indentificador de la base de datos
   //creamos el identificador en el construcctor
   function __construct($usuario_mysql)
   {
       $servidor="localhost";
       $bd="bd_mvc";
     switch (usuario_mysql)#tipo de usuario
      {
         case 0: #usuario anonimus
             $usuario="anonimus";
             $pass="1234";
             break;
         case 1: #administrador;
             $usuario="administrador";
             $pass="123456";
             break;           
      }
      #genera identificador
      $this->enlace= mysqli_connect($servidor, $usuario, $pass, $bd) or die("Intente más tarde, fallo en la conexion");
      mysqli_select_db($bd,$this->enlace)or die("Fallo en la base");
    }//fin constructor
    
    public function cud($consulta_sql) #modificar eliminar
      {
        mysqli_query($consulta_sql, $this->enlace);
        if(mysqli_error())
        {
         #hay error
            return false;
        }else
          {
           #no hay error
           return true;
           }
      }//fin cud
      
        public function busquedas($consulta_sql)
        { #sale de la base
          $respuesta=mysqli_query($consulta_sql,$this->enlace);
          #detectar si hay error
          if(!mysqli_error())
            {  
              $arreglo=array();#
              while($row= mysqli_fetch_array($respuesta))
              {#para un registro
                 $arreglo[]=$row;
              }
              //return $arreglo;
                return $respuesta;
            }else {
                   return false;
                  }
        }//fin de busqueda
        
        public function cerrar()
            {
            mysqli_close($this->enlace);
            }//fin cerrar
      }
?>
