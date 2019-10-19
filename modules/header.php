<?php ?>
<div class="headerContainer">
  <div class="innerContainer">
    <!--            -->
    <!-- LOGO START -->
    <!--            -->
    <div class="logoContainer">
      <a href="index.php">
        <div class="imgContainer">
          <img id="logo" src="assets/logo.png">
        </div>
      </a>

      <div class="logoSlogan">
        <a href="index.php">
          <span id="slogan"><span id="sloganH">pixel</span>Quark</span>
        </a>
      </div>
    </div>


    <!--           -->
    <!-- NAV START -->
    <!--           -->
    <div class="navContainer">
      <ul>
        <li><a href="">home</a></li>
        <li><a href="">projects</a></li>
        <li><a href="">github</a></li>
        <li><a href="">about</a></li>
      </ul>
    </div>


    <?php if ($_SESSION['logged_in'] == true) { ?>

      <!-- if logged_in TRUE do this -->
      <div class="logContainer">

        <a href="#">Connected</a>

      </div>

    <!-- if logged_in FALSE do this -->
    <?php } else {

      if(isset($_POST['loginBar'], $_POST['pwdBar'])){
        $username = $_POST['loginBar'];
        $password = $_POST['pwdBar'];
        print_r($users[0][3]);
        $hash = password_hash($password, PASSWORD_BCRYPT);

        if(empty($username) or empty($password)){
              $error = 'All fields are required.';
          }else{
              $query = $pdo->prepare("SELECT * FROM users WHERE u_name = ? AND u_pwd = ?");
              $query->bindValue(1, $username);
              $query->bindValue(2, $hash);
              $query->execute();

              if(password_verify($password, $users[0][3]) && $username == $users[0][1]){
                $_SESSION['logged_in'] = true;

                header('Location: index.php');
                exit();
              }else{
                    $error = 'Incorrect details.';
                   }
            }
      }
      ?>
      <div class="logContainer">
        <form class="logForm" action="modules/header.php" method="post">
          <input type="text" name="loginBar" placeholder="Login" autocomplete="off">
          <input type="password" name="pwdBar" placeholder="Password" autocomplete="off">
          <button type="submit" name="loginButton" id="logButton">
            <span id="signIn">Login</span><img src="assets/loginw.png" alt="Login">
          </button>
        </form>
      </div>
    <?php } ?><!-- Fim login action -->

    <div id="menuContainer">
      <a href="#"><img src="assets/menu.png" alt=""></a>
    </div>

  </div>
</div>
<?php ?>
