<?php
session_start();

if(isset($_SESSION['loggedin']){


  

  $query = $pdo->prepare('DELETE FROM works WHERE w_id = ?');
  $query->bindValue(1, $selectedPost);
}

 ?>
