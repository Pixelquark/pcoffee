<?php
class Work{

  public function fetch_all(){
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM works");
    $query -> execute();

    return $query->fetchAll();
  }

  public function fetch_data($w_id){
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM works WHERE w_id = ?");
    $query->bindValue(1, $w_id);
    $query->execute();

    return $query->fetch();
  }
}

class User{

  public function fetch_all(){
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM users");
    $query -> execute();

    return $query->fetchAll();
  }

  public function fetch_data($user_id){
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM users WHERE user_id = ?");
    $query->bindValue(1, $user_id);
    $query->execute();

    return $query->fetch();
  }
}
?>
