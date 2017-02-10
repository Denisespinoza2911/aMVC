
<?php  //detecta el clic en ENTRAR
 if(isset($_POST['entrar']))
     {$usuario=$_POST['user'];
      $clave=$_POST['pass'];
      $clave=sha1($clave); //encriptado
      $login=new login($usuario,$clave);
      $arreglo=$login->verificar();//llama al metodo verificar
     // echo count($arreglo);//averigua tama�o de la respuesta que llega(filas)
      echo $arreglo;
     }
?>

