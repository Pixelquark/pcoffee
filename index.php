<?php
session_start();

require_once __DIR__.'/includes/connection.php';
require_once __DIR__.'/includes/works.php';

$user = new User;
$users = $user->fetch_all();

$work = new Work;
$works = $work->fetch_all();

?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="favicon.png">

  <title>pQuark - Desarrollador fullStack</title>
</head>
<body>
<div class="wrapper">
  <?php include ('modules/header.php') ?>
  <?php include ('modules/banner.php') ?>
  <?php include ('modules/cards.php') ?>
  <?php include ('modules/footer.php') ?>

</div><!-- Wrapper -->


<script src="js/jquery.min.js" charset="utf-8"></script>
<script src="js/scripts.js" charset="utf-8"></script>
</body>
</html>
