<?php
session_start();
require_once 'models/general.class.php';// clases general query
require_once 'models/view.class.php';// clase que genera las vistas comunes
require_once 'models/modules.class.php';//clase donde se implementan los objetos
include 'common/login_validate.php';
$validacion = new generalQuery();

if($identificador_usuario == null || $identificador_usuario == ''){
    $codigo_cliente = '';
$codigo_cliente = $_POST['codigo'];

if($codigo_cliente != null){
  $verificacion = 0;
  $verificacion = $validacion->generarSesion($codigo_cliente);
echo $verificacion;
  if($verificacion == 1 ){
    $msg_login = '
     <script>
       $(document).ready(function(){
         setTimeout(function(){ $( location ).attr("href", "inicio.php"); }, 500);
       });
     </script>
   ';
}else{
    $msg_login = 'El inicio de sesión no es válido.';
 
  }
}else{
    $msg_login ='Ingrese su código correctamente.';
}
}else{
    header('Location: inicio.php');
}  

$view = $path['views'].basename($_SERVER['PHP_SELF']);
require $path['tpl'].'template.php';
?>
