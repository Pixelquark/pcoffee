<?php ?>
<div class="headerContainer">
  <div class="innerContainer">
    <!--            -->
    <!-- LOGO START -->
    <!--            -->
    <div class="logoContainer">
      <a href="index.php">
        <div class="imgContainer">
          <img id="logo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAACJklEQVRIie3V30tTYQDG8e/ZOdvZZlgjRrgot6VNbdqPmSsCh5C70hLSLq1uoj+puhKCLjJvkogsLzaSUnI11nSK6PqxwbK0Vs1t6TldRAs5Q1zmQtZzd87zvu8HzuF9X6i0CAB3A68GBEHoKweoqupgr899WQJQURpE0WAuB7y6mm8A0JUDK5Z/BksAiqKkP6RS5HK5bcVkWabasjtdgPO5/FRwdKQz8fb1tsL7D9Ti7z4/BZX4j3cu3Oytw1Qlbx9stVm0k0Udx864yGbyAOzdt+fvwYJO4OwFL00ep6azu2zEY0lUVQXgSKsTf98pBJ2wNVjSi5zr97G8mCYwPKnpW7x1RJ/PF56D90Ok3i3Rc6UDySD+GWyqkum92slMOM5kcFrTy0YDRpPM0vvP696Hn84SnZjj4jU/5l3G0uHuSz5mw3FiL+JF+0aPg1i4eDcbeUMstEBXf3vp8L2BAIeP2mk84SgOH3cQCy0U7eyuGppanTy4/aR0OJvJMXhjhPrmg3jaG9d1Fms1ma9Zsit5zTx3Wx1tHW7uXH/El0+Z0mGAtVWF4VtBLNZqfN2e34ufPERkYk4z/rS/hdr6GoZujpLPft9o6Z+XxEZRFZXHQ+OFfSwIAvYGG2MPw5qx89EEz5KRwvbaEvwri8llAIxmAy/HZlDWFM2YVOLjZpcr/chc+ZYjMq79zKVm514S/+HNRgLQS+K0v6tnphygXtJpD/6KyA86KquvX0zFrgAAAABJRU5ErkJggg==">
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
        <li><a href="<?php echo $users[0]['u_linked'] ?>" target="_blank">Linkedin</a></li>
        <li><a href="<?php echo $users[0]['u_git'] ?>" target="_blank">Github</a></li>
        <li><a href="<?php echo $users[0]['u_facebook'] ?>" target="_blank">Sobre mi</a></li>
      </ul>
    </div>


    <?php if (isset($_SESSION['loggedin'])) { ?>

      <!-- if logged_in TRUE do this -->
      <div class="logContainer">
          <small id="userNameMsg">Welcome, <span id="userNameLog"><?php echo $users[0][2] ?></span></small>
        <form class="" action="admin/logout.php" method="post">
          <button type="submit" name="button" id="logOutBut">Logout</button>
        </form>
      </div>

    <!-- if logged_in FALSE do this -->
    <?php } else {
      if (isset($_POST['loginBar'], $_POST['pwdBar'])){

        $username = $_POST['loginBar'];
        $password = $_POST['pwdBar'];

        $hash = password_hash($password, PASSWORD_BCRYPT);



        if(empty($username) or empty($password)){
              $error = 'All fields are required.';
          }else{
              $query = $pdo->prepare("SELECT * FROM users WHERE u_name = ?");
              $query->bindValue(1, $username);
              $query->execute();
              $u_pass = $query->fetch(PDO::FETCH_ASSOC);

                    if(password_verify($password, $u_pass['u_pwd']) && $username == $u_pass['u_name']){
                      $_SESSION['loggedin'] = true;
                      $_SESSION['username'] = $username;

                      header('Location: index.php');
                      exit();
                    }else{
                      $error = 'Incorrect details.';
                    }
            }
      }
      ?>
      <div class="logContainer">
        <?php if (isset($error)){?><small id="errorMsg"><?php echo $error; ?></small><?php } ?>
        <form class="logForm" action="index.php" method="post">
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
