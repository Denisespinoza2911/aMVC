<?php
//si el login es correcto
//compara con la tabla usuario
class usuario
{ private $id;
  private $nombre;
  private $usuario;
  private $clave;
  private $estado;
  
  function _construct($i=null,$nom=null,$user=null,$pass=null,$est=null)
  {      $this->id=$i;
      $this->nombre=$user;
      $this->clave=$pass;
      $this->estado=$est;
  }//constuctor finalizado

  function get_nombre()
  {return $this->nombre;  
  }
  function get_usuario()
  {return $this->usuario ;  
  }
}
?>

