<?php
session_start();
include 'common/login_validate.php';//crea las variables "globales" de session

$inicio=$registro=$canjes=$retos=$sorteo=$galeria=0;
switch (basename($_SERVER['PHP_SELF'])) {
    case "inicio.php":
      $inicio='active';
    break;
    case "registro.php":
      $registro='active';
    break;
    case "canjes.php":
      $canjes='active';
    break;
    case "retos.php":
      $retos='active';
    break;
    case "sorteo.php":
      $sorteo='active';
    break;
    case "galeria.php":
      $galeria='active';
    break;
}
?>

<header class="col-xs-12 np">
<div class="col-xs-12 np">
  <div class="col-xs-8 col-sm-6 col-md-4 col-lg-3 np">
    <div class="col-xs-6 pos-logo1">
      <img class="img-responsive" src="app/img/logo1.png" alt="">
    </div>
    <div class="col-xs-6 blanco-logo2">
      <a href="inicio.php"><img style="margin:auto;" class="img-responsive" src="app/img/logo2.png" alt=""></a>
    </div>
  </div>
  <div class="hidden-xs hidden-sm col-md-8 col-lg-9">
      <nav class="col-xs-12 np nav-pc np">
        <div class="col-md-9 col-lg-8 np pos-linksh">
          <ul class="col-xs-12 np">
            <li class="li1 <?= $canjes; ?>">
              <a  href="canjes.php">CANJE DE PREMIOS</a>
            </li>
            <li class="li2 <?= $retos; ?>">
              <a  href="#">RETOS CEVICHEROS</a>
            </li>
            <li class="li3 <?= $sorteo; ?>">
              <a  href="sorteo.php">SORTEO FINAL</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 col-lg-4 np">
          <div class="col-md-4 col-lg-2 np text-center pos-btnpch">
              <button class="bte1" id="btn">
                  <span id="lin1" class="spn1"></span>
                  <span id="lin2" class="spn2"></span>
                  <span id="lin3" class="spn3"></span>
                  <span id="lin4" class="spn4"></span>
                  <span id="lin6" class="spn6"></span>
              </button>
          </div>
          <div class="hidden-md col-lg-7 np">
            <div class="col-xs-12 text-center tit-usupuntos">
              PUNTOS CANCHITA <br>
              ACUMULADOS
            </div>
            <div class="col-xs-12 puntos-usupuntos text-center">
              7640 <span class="pts-text">PTS.</span>
            </div>
            <div class="col-xs-12 sorteo-usupuntos text-center np">
              <div class="col-xs-4 puntos-sorteo np">
                20
              </div>
              <div class="col-xs-8 np">
                <div class="col-xs-12 np pos-sorteo1">
                  <span class="sorteo-text">OPCIONES</span>
                </div> <br>
                <div class="col-xs-12 np pos-sorteo2">
                    <span class="sorteo2-text">PARA EL SORTEO</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="subheader-menu hidden-xs hidden-sm col-md-offset-6 col-md-2 col-lg-offset-6 col-lg-2 text-center np">
          <div class="subnav-menu col-xs-12 np">
            <div class="col-xs-12 hidden-lg np">
              <div class="col-xs-12 text-center tit-usupuntos">
                PUNTOS CANCHITA <br>
                ACUMULADOS
              </div>
              <div class="col-xs-12 puntos-usupuntos text-center">
                7640 <span class="pts-text">PTS.</span>
              </div>
              <div class="col-xs-12 sorteo-usupuntos text-center np">
                <div class="col-xs-4 puntos-sorteo np">
                  20
                </div>
                <div class="col-xs-8 np">
                  <div class="col-xs-12 np pos-sorteo1">
                    <span class="sorteo-text">OPCIONES</span>
                  </div> <br>
                  <div class="col-xs-12 np pos-sorteo2">
                      <span class="sorteo2-text">PARA EL SORTEO</span>
                  </div>
                </div>
              </div>
            </div>
            <!--li class="border-l col-xs-12 np exp-bordertop">
              <a class="l-submenu"  href="mifoto.php">Foto perfil</a>
            </li>
            <li class="border-l col-xs-12 np">
              <a class="l-submenu" href="#">Cambio de contraseña</a>
            </li-->
            <li class="border-l col-xs-12 np exp-bordertop">
              <a class="l-submenu" href="#">Galería de fotos</a>
            </li>
          <div class="col-xs-12  sec-btn-op">
            <form class="cerrar-sesion" action="<?= URL; ?>" method="POST">
              <button class="l-submenu btn-cerrarsesion" type="submit" name="session-close" value="session-close">
                <i class="fa fa-power-off"></i>
                Cerrar sesión
              </button>
            </form>
          </div>
          </div>
        </div>
      </nav>
  </div>

  <div class="col-xs-4 col-sm-6 hidden-md hidden-lg text-right np">
    <button class="bte2" id="btn2">
        <span id="lin1" class="spn12"></span>
        <span id="lin2" class="spn22"></span>
        <span id="lin3" class="spn32"></span>
        <span id="lin4" class="spn42"></span>
        <span id="lin6" class="spn62"></span>
    </button>
  </div>

  <div class="subheadermovil-menu col-xs-12 col-sm-12 hidden-md hidden-lg">

    <ul class="subnavmovil-menu col-xs-12 np">
      <li class="espacio-datosUsuario col-xs-12">
        <div class="col-xs-offset-2 col-xs-4">
          <img class="forma-imgperfil img-responsive" src="<?= $imagenFotoPerfil; ?>" alt="">
        </div>
        <div class="col-xs-6 col-sm-4  datos-Usuariomovil np text-left">
          <div class="col-xs-12 hidden-lg np">
            <div class="col-xs-12 text-center tit-usupuntos">
              PUNTOS CANCHITA <br>
              ACUMULADOS
            </div>
            <div class="col-xs-12 puntos-usupuntos text-center">
              7640 <span class="pts-text">PTS.</span>
            </div>
            <div class="col-xs-12 sorteo-usupuntos text-center np">
              <div class="col-xs-4 puntos-sorteo np">
                20
              </div>
              <div class="col-xs-8 np">
                <div class="col-xs-12 np pos-sorteo1">
                  <span class="sorteo-text">OPCIONES</span>
                </div> <br>
                <div class="col-xs-12 np pos-sorteo2">
                    <span class="sorteo2-text">PARA EL SORTEO</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="<?= $canjes; ?>">
        <a href="#">CANJE DE PREMIOS</a>
      </li>
      <li class="<?= $retos; ?>">
        <a href="#">RETOS CEVICHEROS</a>
      </li>
      <li class="<?= $sorteo; ?>">
        <a href="#">SORTEO FINAL</a>
      </li>
    <!--li >
        <a href="#">FOTO PERFIL</a>
      </li>
      <li >
        <a href="#">CAMBIO CONTRASEÑA</a>
      </li-->
      <li class="<?= $galeria; ?>">
        <a href="#">GALERÍA DE FOTOS</a>
      </li>
    </ul>
    <div class="col-xs-12 marginmenu-movil np text-center">
      <form class="cerrar-sesion" action="<?= URL; ?>" method="POST">
        <button class="l-submenumovil btn-cerrarsesionmovil" type="submit" name="session-close" value="session-close">
          <i class="fa fa-power-off"></i>
          CERRAR SESIÓN
        </button>
      </form>
    </div>
  </div>
</div>
</header>
