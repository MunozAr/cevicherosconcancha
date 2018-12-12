<?php
session_start();
require_once 'models/general.class.php';// clases general query
require_once 'models/view.class.php';// clase que genera las vistas comunes
require_once 'models/modules.class.php';//clase donde se implementan los objetos
include 'common/login_validate.php';
$operaciones = new generalQuery();

if( $identificador_usuario != null || $identificador_usuario != ''){

}else{
    header('Location: login.php');
}

$view = $path['views'].basename($_SERVER['PHP_SELF']);
require $path['tpl'].'template.php';
?>
