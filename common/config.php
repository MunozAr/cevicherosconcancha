<?php
error_reporting(E_ALL ^ E_NOTICE);
header("Content-type:text/html; charset=utf-8");

// DATOS DE CONEXIÓN A BD
define('HOST', 'localhost');
define('DATA_BASE', 'cevicheronconcancha');
define('USER_DB', 'root');
define('PASS_DB', 'root');

define("MAIL_SECURE","ssl");
define("MAIL_HOST","box935.bluehost.com");
define("MAIL_PORT","465");
define("MAIL_USER","renzo.munoz@likeseasons.com");
define("MAIL_USER_PASS","M@:v3r!cK");
define("MAIL_FROM_NAME","HOla1");
define("MAIL_SUBJECT","HOla2");
define("MAIL_ALTBODY","Recuperación de Contraseña");
define("MAIL_USER_NAME","SANGUCHEROS QUE SABEN");
/*
define('USER_DB', 'phpmyadmin');
define('PASS_DB', 'LkS@2236!');*/
// fin

// DATOS GENERALES
define('URL',basename($_SERVER['REQUEST_URI']));
define('SYS','externo');//opciones: promperu ó externo
// fin

define("SLASH", "/");
define("SLASH_SUP", "../");
$site = array(
    "charset" => "UTF-8",
    "lang" => "es",
    "name" => "CEVICHEROS CON CANCHA",
    "keywords" => "",
    "description" => "Alicorp - Campaña publicitaria para llegar a todos los cevicheros del Perú y darles la oportunidad de ganar muchos premios."
);

if(IsSet($_GET['lang'])){//segun la variable lang se envia cookie
    $site['lang']=$_GET['lang'];
    setcookie("lang",$site["lang"],time()+86400);

        header("Location: ".basename($_SERVER['PHP_SELF']).$cat.$prod); // $cat y $prod son variables condicionadas y definidas arriba

} else {
    if(IsSet($_COOKIE['lang'])){
        $site['lang']=$_COOKIE['lang'];
    }
}

$path = array(
    "controllers" => "controllers" . SLASH,
    "css" => "app/css" . SLASH,
    "img" => "app/img" . SLASH,
    "js" => "app/js" . SLASH,
    "module" => "module" . SLASH,
    "tpl" => "tpl" . SLASH,
    "views" => "views" . SLASH,
    "common" => "common" . SLASH,
    "lib" => "common" . SLASH . "lib" . SLASH,
    "lang" => "common" . SLASH . "lang" . SLASH
);
$contact = array(
    "msgok" => "No se pudo enviar el mensaje, intentelo de nuevo.",
    "msgerror" => "El mensaje se envio correctamente, en breve nos pondremos en contacto con usted."
);
if (!isset($_POST['nombre'])) {
  include $path['lang'] . 'lang_' . $site['lang'] . '.php';
}
?>