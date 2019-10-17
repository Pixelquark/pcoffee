<?php ?>
<div class="headerContainer">
  <div class="innerContainer">

    <div class="logoContainer">
      <a href="index.php">
        <div class="imgContainer">
          <img id="logo" src="assets/logo.png">
        </div>
      </a>

      <div class="logoSlogan">
        <a href="index.php">
          <span id="slogan"><span id="sloganH">py</span>Code</span>
        </a>
      </div>
    </div>


    <div class="navContainer">
      <ul>
        <li><a href="">home</a></li>
        <li><a href="">profile</a></li>
        <li><a href="">projects</a></li>
        <li><a href="">FAQ</a></li>
      </ul>
    </div>

    <div class="logContainer">

      <form class="logForm" action="index.html" method="post">
        <input type="text" name="loginBar" placeholder="Login" autocomplete="off">
        <input type="password" name="pwdBar" placeholder="Password" autocomplete="off">
        <button type="submit" name="loginButton" id="logButton">
          <span>Sign in</span><img src="assets/loginw.png" alt="Login">
        </button>
        <button type="submit" name="signButton" id="signButton">
          <span>Sign up</span><img src="assets/signinw.png" alt="Login">
        </button>
      </form>

    </div>
    <div id="menuContainer">
      <a href="#"><img src="assets/menu1.png" alt=""></a>
    </div>
<?php ?>
