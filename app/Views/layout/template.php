<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portofolio | Rifqi Akyas Hifdzi Rahman</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,800&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="asset/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="asset/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="asset/img/favicon.png">
  </head>
  <body>
<?= $this->include('layout/navbar'); ?>

<?= $this->renderSection('content'); ?>

<?= $this->include('layout/footer'); ?>
  </body>