<?php
  try{
    $pdo = new PDO('mysql:host=localhost:3306; dbname=pixelqua_pquark','pixelqua_pixelquark', 'erikBALAzildo00@');
    // $pdo = new PDO('mysql:host=localhost; dbname=pquark','root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     } catch(PDOException $e){
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
  }
?>
