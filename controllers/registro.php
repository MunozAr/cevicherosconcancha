<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
require_once 'models/general.class.php';// clases general query
require_once 'models/view.class.php';// clase que genera las vistas comunes
require_once 'models/modules.class.php';//clase donde se implementan los objetos


$registrar = new generalQuery();

$update = new Usuario();

$validacion = $_POST['btnRegistro'];
$codigo = '';
$nombre='';
$dni = '';
$direccion = '';
$departamento = '';
$provincia = '';
$distrito = '';
$telefono = '';
$email = '';
$id = '';
$usuarioExistente = ' ';
$arrayUpdate = array();
if($validacion == 1){
    $codigo = $_POST['codigo'];
    $verificar = $registrar->consultarUsuario($codigo);
    //Array ( [identificador] => 1 [nombre] => Alicorp [activo] => 1 [existe] => 1 )
    if($verificar['existe'] == 1){
        $usuarioExistente = 'Usuario ya activo anteriormente!';
    }else if($verificar['existe'] == 0){
        $ArrayID = $registrar->consultarID($codigo);
        $id = $ArrayID[0]['usuario_id'];
        //echo $id;
        $nombre = $_POST['nombre'];
        $dni = $_POST['dni'];
        $direccion = $_POST['direccion'];
        $departamento = $_POST['departamento'];
        $provincia = $_POST['provincia'];
        $distrito = $_POST['distrito'];
        $telefono = $_POST['telefono'];
        $email = $_POST['correo'];

        date_default_timezone_set('America/Lima');
        $fechaRegistro = date('Y/m/d H:i:s');

        $arrayUpdate['id'] = $id;
        $arrayUpdate['fields'][0] = $nombre;
        $arrayUpdate['fields'][1] = $dni;
        $arrayUpdate['fields'][2] = $direccion;
        $arrayUpdate['fields'][3] = $departamento;
        $arrayUpdate['fields'][4] = $provincia;
        $arrayUpdate['fields'][5] = $distrito;
        $arrayUpdate['fields'][6] = $telefono;
        $arrayUpdate['fields'][7] = $email;
        $arrayUpdate['fields'][8] = $fechaRegistro;

        
        if( $arrayUpdate['id'] != ''){
            $updateverificacion = $update->editar($arrayUpdate);
            if($updateverificacion == 1){
                $usuarioExistente = 'Usuario Activado Correctamente!';
            }
        }else if($arrayUpdate['id'] == ''){
            $usuarioExistente = 'El código de cliente ingresado no existe!';
        }else{
            $usuarioExistente = 'Hubo un error, cierre y vuelva a ingresar!';
        }
    }   
}


$view = $path['views'].basename($_SERVER['PHP_SELF']);
require $path['tpl'].'template.php';
?>
