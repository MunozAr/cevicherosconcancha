<section class="container">
<div class="col-xs-12 text-center espacio-titulo">
    <h1 class="titulo-registro">
        Registro
    </h1>
</div>
<div class="col-xs-12 text-center espacio-subtitulo">
<p class="subtitulo-registro">
    Completa estos datos y únete a los Cevicheros con Cancha
</p>
</div>

<div class="col-lg-offset-3 col-lg-6 back-formularioRegistro">
<form class="formularioRegistro" action="registro.php" method="post" autocomplete="off">
<div class="form-group">
    <input type="text" class="form-control estiloInputRegistro" name="codigo" id="codigo" minlength="6" placeholder="Código de Cliente" maxlength="7" required>
</div>
<div class="form-group">
    <input type="text" class="form-control estiloInputRegistro" name="nombre" id="nombre"  placeholder="Nombre" required>
</div>
<div class="form-group">
    <input type="text" class="form-control estiloInputRegistro" name="dni" id="dni" minlength = "8"  placeholder="Dni" maxlength="8" required>
</div>
<div class="form-group">
    <input type="text" class="form-control estiloInputRegistro" name="direccion" id="direccion" placeholder="Dirección" required>
</div>
<div class="col-xs-12 text-center np espacio-selects">
<select name="departamento" id="departamento" class="form-style tamano-selected color-effect-1" aria-required="true" required>
    <div class="col-xs-12 text-center">
    <option value="0" class="color-selected" selected="true" disabled>Departamento</option>
	<option value="Prueba">Prueba</option>
    </div>
</select>
<div class="lineaSelect"></div>
<div id="eDepartamento" class="col-xs-12 text-Error">
    Seleccione Departamento Correctamente
</div>
</div>
<div class="col-xs-12 text-center np espacio-selects">
<select name="provincia" id="provincia" class="form-style tamano-selected color-effect-1" aria-required="true" required>
    <div class="col-xs-12 text-center">
    <option value="0" class="color-selected" selected="true" disabled >Provincia</option>
	<option value="Prueba">Prueba</option>
    </div>
</select>
<div class="lineaSelect"></div>
<div id="eProvincia" class="col-xs-12 text-Error">
    Seleccione Provincia Correctamente
</div>
</div>
<div class="col-xs-12 text-center np espacio-selects">
<select name="distrito" id="distrito" class="form-style tamano-selected color-effect-1" aria-required="true" required>
    <div class="col-xs-12 text-center">
    <option value="0" class="color-selected" selected="true" disabled >Distrito</option>
	<option value="Prueba">Prueba</option>
    </div>
</select>
<div class="lineaSelect"></div>
<div id="eDistrito" class="col-xs-12 text-Error">
    Seleccione Distrito Correctamente
</div>
</div>
<div class="form-group">
    <input type="text" class="form-control estiloInputRegistro" name="telefono" id="telefono" minlength = "7"  placeholder="Teléfono" maxlength="9" required>
</div>

<div class="form-group">
    <input type="email" class="form-control estiloInputRegistro" name="correo" id="correo"  placeholder="Correo Electrónico" required>
</div>

<div class="col-xs-12 text-center respuestaRegistro">
    <?= $usuarioExistente; ?>
</div>

<div class="col-xs-12 text-center pos-btnRegistro">
    <button id="enviarRegistro" name="btnRegistro" value="1" type="submit" class="estilo-btnRegistro">
        Confirmar
    </button>
</div>
<div class="col-xs-12 text-left">
    <img class="pos-conchasRegistro" src="app/img/registro/conchasRegistro.png" alt="Conchas - Cevicheros con Cancha - Alicorp">
</div>
</form>
</div>
</section>
<script>

//Filtro de Nombre
	// /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/ -> Formato Walter Renzo ....
//Filtro de Código de Cliente
$(document).ready(function(){
    //Filtro Input Código
    $("#codigo").keydown(function (e) {
		// Permite: backspace, delete, tab, escape, enter and .
		if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
		// Permite: Ctrl+A
		(e.keyCode == 65 && e.ctrlKey === true) ||
		// Permite: home, end, left, right
		(e.keyCode >= 35 && e.keyCode <= 39)) {
		// solo permitir lo que no este dentro de estas condiciones es un return false
		return;
		}
		// Aseguramos que son numeros
		if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
		e.preventDefault();
		}
    });
    
    //Filtro Input Nombre
    $("#nombre").keydown(function(e){
		// Permite: backspace, delete, tab, escape, enter and .
		if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190, 32]) !== -1 ||
		// Permite: Ctrl+A
		(e.keyCode == 65 && e.ctrlKey === true) ||
		// Permite: home, end, left, right
		(e.keyCode >= 35 && e.keyCode <= 39)) {
		// solo permitir lo que no este dentro de estas condiciones es un return false
		return;
		}

	    // Aseguramos que son letras
		if ((e.keyCode<65 || (e.keyCode >95 && e.keyCode <106) ) && ((e.keyCode > 122 || e.keyCode <129) || (e.keyCode > 165 || e.keyCode <181))) {
			e.preventDefault();
		}
    });
    
    //Filtro Input Dni
    $("#dni").keydown(function (e) {
		// Permite: backspace, delete, tab, escape, enter and .
		if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
		// Permite: Ctrl+A
		(e.keyCode == 65 && e.ctrlKey === true) ||
		// Permite: home, end, left, right
		(e.keyCode >= 35 && e.keyCode <= 39)) {
		// solo permitir lo que no este dentro de estas condiciones es un return false
		return;
		}
		// Aseguramos que son numeros
		if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
		e.preventDefault();
		}
    });

    //Filtro de Teléfono
    $("#telefono").keydown(function (e) {
		// Permite: backspace, delete, tab, escape, enter and .
		if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
		// Permite: Ctrl+A
		(e.keyCode == 65 && e.ctrlKey === true) ||
		// Permite: home, end, left, right
		(e.keyCode >= 35 && e.keyCode <= 39)) {
		// solo permitir lo que no este dentro de estas condiciones es un return false
		return;
		}
		// Aseguramos que son numeros
		if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
		e.preventDefault();
		}
    });


    //Filtro de Email
	$("#correo").keyup(function (e) {
		var correo = $("#correo").val();

		if(validateEmail(correo)){
			$('#opccorreo').css('opacity','0');
			$('.color-effect-8').css('border-color','#39B54A');
		} else {
			$('#opccorreo').css('opacity','1');
			$('.color-effect-8').css('border-color','#FF1D25');
		    }
		});

	    function validateEmail(email) {
		    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		    return re.test(String(email).toLowerCase());
        }
    
    //Validacion de Botón
    $("#enviarRegistro").click(function(e) {
        
        var codigo = $("#codigo").val();
        var nombre = $("#nombre").val();
        var dni = $("#dni").val();
        var direccion = $("#direccion").val();
        var departamento = $("select#departamento").val();
        var provincia = $("select#provincia").val();
        var distrito = $("select#distrito").val();
        var telefono = $("#telefono").val();
        var correo = $("#correo").val();

        //CODIGO
        if(codigo.length<6){
	        flag = false;
		}
        //NOMBRE
        if(nombre.length<2){
	        flag = false;
        }
        //DNI
        if(dni.length<8){
	        flag = false;
        }
        //DIRECCION
        if(direccion.length<2){
	        flag = false;
        }
        //Select Departamento
        if(departamento == null){
            $('#eDepartamento').css('opacity','1');
	        flag = false;
        }else{
            $('#eDepartamento').css('opacity','0');
        }
        //Select provincia
        if(provincia == null){
            $('#eProvincia').css('opacity','1');
	        flag = false;
        }else{
            $('#eProvincia').css('opacity','0');
        }
        //Select distrito
        if(distrito == null){
            $('#eDistrito').css('opacity','1');
	        flag = false;
        }else{
            $('#eDistrito').css('opacity','0');
        }
        
        if(flag != false){
            $('#enviarRegistro').prop('disabled', true);
        }
    });
});
</script>