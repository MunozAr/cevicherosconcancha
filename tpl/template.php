<!DOCTYPE html>
<html lang=en-US>
<head>
  <meta charset="<?php echo $site['charset']; ?>">
  <meta lang="<?php echo $site['lang']?>">
  <meta name="keywords" content="<?php echo $site['keywords']; ?>" >
  <meta http-equiv='cache-control' content='no-cache'>
  <meta http-equiv='expires' content='0'>
  <meta http-equiv='pragma' content='no-cache'>
  <link rel="shortcut icon" href="./app/img/favicon.png" type="image/x-icon">
  <meta name="description" content="<?php echo $site['description']; ?>" >
  <title><?php echo $site['name']; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,900' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="app/css/bxslider.css"/>
  <link rel="stylesheet" href="app/css/fancybox.css"/>
  <link rel="stylesheet" href="app/css/bootstrap.css"/>
  <link rel="stylesheet" href="app/css/demo.css"/>
  <link rel="stylesheet" href="app/fonts/stylesheet.css"/>
  <link rel="stylesheet" href="app/css/style.css"/>
  <script src="app/js/jquery.js"></script>
  <script src="app/js/app.js"></script>
  <script src="app/js/fancybox.js"></script>
  <script src="app/js/bootstrap.js"></script>
  <script src="app/js/bxslider.js"></script>
  <script src="app/js/parallax.js"></script>
</head>
<?php
switch (basename($_SERVER['PHP_SELF'])) {
    case "inicio.php":
      $fondoBack='class="fondoInicio"';
    break;
    case "registro.php":
      $fondoBack='class="fondoRegistro"';
    break;
    case "canjes.php":
      $fondoBack='class="fondoRegistro"';
    break;
    case "login.php":
      $fondoBack='class="fondoLogin"';
    break;
    case "sorteo.php":
      $fondoBack='class="fondoSorteo"';
    break;
}
?>
<body <?= $fondoBack; ?>>
  <?php include $path['tpl'].'header.php'; ?>
  <?php include $path['tpl'].'main.php'; ?>
  <?php include $path['tpl'].'footer.php'; ?>
</body>
</html>
