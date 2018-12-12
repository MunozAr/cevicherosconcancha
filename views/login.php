<section class="container">
<div class="col-xs-12 np pos-Login">
  <div class="col-xs-12 text-center tit-inisesion">
    Inicia Sesión
  </div>
  <div class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4 fondoColorForm">
    <form id="formLogin" class="col-xs-12 np" action="login.php" method="post" autocomplete="off">
      <div class="form-group">
        <input type="text" class="form-controlLogin estilo-inputlogin" name="codigo" id="codigo" minlength="6" placeholder="Código de Cliente" maxlength="7">
      </div>
      <div class="col-xs-12 text-center pos-btnLogin">
        <button id="btnLogin" class="estilo-btnLogin" type="submit" name="button">Confirmar</button>
      </div>
      <!--div class="col-xs-12 text-center np">
        <a id="olcontrasena" class="estilo-olcontrasena" href="#">
          ¿Olvidaste tu contraseña?
        </a>
      </div-->
    </form>
    <div class="col-xs-12 texto-respuestaLogin text-center">
    <?= $msg_login; ?>
    </div>
    <div class="col-xs-12">
      <img class="posPecesLogin" src="app/img/peces.png" alt="">
    </div>
    
  </div>
</div>
</section>
<script>
$(document).ready(function(){
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
});
</script>