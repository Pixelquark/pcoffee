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

  public function fetch_data($u_name, $u_pwd){
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM users WHERE u_name = ? AND u_pwd = ?");
    $query->bindValue(1, $u_name);
    $query->bindValue(2, $u_pwd);
    $query->execute();

    return $query->fetch();
  }

}
?>
