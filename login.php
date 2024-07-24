<?php
// logain page 
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Overpass+Mono" rel="stylesheet">



</head>

<main>
  <?php
  if (isset($_GET["login"])) {
  ?>
    <div class="alert alert-danger">
    <strong>Check your email and password!</strong>
    </div>
  <?php
  }
  $email = $password = $checked = "";
  if (isset($_COOKIE["email"]) && isset($_COOKIE["password"])) {
    $email = $_COOKIE["email"];
    $password = $_COOKIE["password"];
    $checked = "checked";
  }
  ?>


  <div id="wrapper">
    <div class="main-content">
      <div class="header" class="logo" style="padding-top: 8px;padding-right: 110px;">


        <img src="https://www.instagram.com/static/images/web/mobile_nav_type_logo.png/735145cfe0a4.png" alt="">

      </div>
      <div class="l-part">

        <form action="check_login.php" method="post">
          <!-- <input type="text" class="input-1" placeholder="Enter email" name="email" id="email" required
            class="input-1" value=" <? //php echo $email ; 
                                    ?> " /> -->
          <input type="text" class="input-1" placeholder="Enter email" name="email" id="email" required 
          class="input-1" value="<?php echo $email; ?>" />
          <div class="overlap-text">

            <input type="password" class="input-2" id="password" placeholder="Enter password" name="password" required value="<?php
                                                                                                                      echo $password;
                                                                                                                      ?>">
            <!-- <a href="#">Forgot?</a> -->
          </div>
          <input type="submit" value="Log in" class="btn" />
      </div>
      <br>
      <br>
      <div class="form-check mb-3">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="remember" value="1" <?php echo  $checked; ?>> Remember me
        </label>
      </div>

      </form>

    </div>
    <div class="sub-content">
      <div class="s-part">
        Don't have an account?<a href="register-page.php">Sign up</a>
      </div>
    </div>
  </div>
</main>





<!-- By Coding Market -->

<style>
  * {
    margin: 0px;
    padding: 0px;
  }

  body {
    background-color: #eee;
  }

  #wrapper {
    width: 500px;
    height: 50%;
    overflow: hidden;
    border: 0px solid #000;
    margin: 50px auto;
    padding: 10px;
  }

  .main-content {
    width: 250px;
    height: 40%;
    margin: 10px auto;
    background-color: #fff;
    border: 2px solid #e6e6e6;
    padding: 40px 50px;
  }

  .header {
    border: 0px solid #000;
    margin-bottom: 5px;
  }

  .header img {
    height: 50px;
    width: 175px;
    margin: auto;
    position: relative;
    left: 40px;
  }

  .input-1,
  .input-2 {
    width: 100%;
    margin-bottom: 5px;
    padding: 8px 12px;
    border: 1px solid #dbdbdb;
    box-sizing: border-box;
    border-radius: 3px;
  }

  .overlap-text {
    position: relative;
  }

  .overlap-text a {
    position: absolute;
    top: 8px;
    right: 10px;
    color: #003569;
    font-size: 14px;
    text-decoration: none;
    font-family: 'Overpass Mono', monospace;
    letter-spacing: -1px;
  }

  .btn {
    width: 100%;
    background-color: #3897f0;
    border: 1px solid #3897f0;
    padding: 5px 12px;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    border-radius: 3px;
  }

  .sub-content {
    width: 250px;
    height: 40%;
    margin: 10px auto;
    border: 1px solid #e6e6e6;
    padding: 20px 50px;
    background-color: #fff;
  }

  .s-part {
    text-align: center;
    font-family: 'Overpass Mono', monospace;
    word-spacing: -3px;
    letter-spacing: -2px;
    font-weight: normal;
  }

  .s-part a {
    text-decoration: none;
    cursor: pointer;
    color: #3897f0;
    font-family: 'Overpass Mono', monospace;
    word-spacing: -3px;
    letter-spacing: -2px;
    font-weight: normal;
  }

  input:focus {
    background-color: yellow;
  }
</style>

</body>

</html>