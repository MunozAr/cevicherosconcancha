<?php
    // DATOS LOGIN
        //$log = new Login();
        //$log->validateSession();

        // Datos usuario - view
        $identificador_usuario = $_SESSION['user-data']['identificador'];
        $nombre_usuario = $_SESSION['user-data']['nombre'];
        $activo_usuario = $_SESSION['user-data']['activo'];
        $existe_usuario= $_SESSION['user-data']['existe'];

        if (isset($_POST['session-close']) != null ) {
            if($_POST['session-close']=='session-close'){
                session_destroy();
                echo '<script>
                $(document).ready(function(){
                  setTimeout(function(){ $( location ).attr("href", "login.php"); }, 1000);
                });
                </script>';
            }
        }
    // FIN DATOS LOGIN
?>
