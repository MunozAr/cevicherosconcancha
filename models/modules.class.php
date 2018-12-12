<?php

    class Usuario extends View
    {

        #1
        public function eliminar($id)
        {
            #Query
            $arg = array(
                'tables'=>array(
                    array('usuario')
                ),
                'conditional'=>array(
                    array('','usuario_id',$id)
                )
            );

            $update=$this->deleteRegister($arg);

            return $update;
        }

         #2
        /*  public function agregar($value)
        {
            //  print_r($value);
            $usuario_nombre = $value[0];
            $usuario_dni = $value[1];
            $usuario_ruc = $value[2];
            $usuario_nombrenegocio = $value[3];
            $usuario_direccionlegal = $value[4];
            $usuario_telefono = $value[5];
            $usuario_correo = $value[6];
            $usuario_contrasena = $value[7];
            $usuario_imagen = $value[8];
            $usuario_fecha = $value[9];
            $arg = array(
                    'tables'=>array(
                            array('usuario')
                        ),
                    'fields'=>array(
                            array('usuario_nombre',$usuario_nombre)
                            ,array('usuario_dni',$usuario_dni)
                            ,array('usuario_ruc',$usuario_ruc)
                            ,array('usuario_nombrenegocio',$usuario_nombrenegocio)
                            ,array('usuario_direccionlegal',$usuario_direccionlegal)
                            ,array('usuario_telefono',$usuario_telefono)
                            ,array('usuario_email',$usuario_correo)
                            ,array('usuario_contrasena',$usuario_contrasena)
                            ,array('usuario_imagen',$usuario_imagen)
                            ,array('usuario_activo',1)
                            ,array('usuario_fecha',$usuario_fecha)
                        )
                );
            $add = $this->addRegister($arg);

            return $add;
        }*/

        #3
        public function editar($arg)
        {

            $usuario_id = $arg['id'];
            $usuario_nombre = $arg['fields'][0];
            $usuario_dni = $arg['fields'][1];
            $usuario_direccion = $arg['fields'][2];
            $usuario_departamento = $arg['fields'][3];
            $usuario_provincia = $arg['fields'][4];
            $usuario_distrito = $arg['fields'][5];
            $usuario_telefono = $arg['fields'][6];
            $usuario_email = $arg['fields'][7];
            $usuario_fecha = $arg['fields'][8];

            #Query
            $arg = array(
                'tables'=>array(
                    //array('tabla')
                    array('usuario')
                ),
                'fields'=>array(
                    //array('campo','valor')
                    array('usuario_nombre',$usuario_nombre)
                    ,array('usuario_dni',$usuario_dni)
                    ,array('usuario_ruc',$usuario_direccion)
                    ,array('usuario_nombrenegocio',$usuario_departamento)
                    ,array('usuario_direccionlegal',$usuario_provincia)
                    ,array('usuario_telefono',$usuario_distrito)
                    ,array('usuario_email',$usuario_telefono)
                    ,array('usuario_contrasena',$usuario_email)
                    ,array('usuario_imagen',$usuario_imagen)
                    ,array('usuario_activo',1)
                    ,array('usuario_fecha',$usuario_fecha)
                ),
                'conditional'=>array(
                    //array('operador: VACIO, AND ó OR','campo','valor')
                    array('','usuario_id',$usuario_id)
                )
            );

            $update=$this->editRegister($arg);

            return $update;
        }
    }
?>
