<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo "<script>";
      echo "alert('Wrong Password')"; 
      echo "</script>";
    }
  }
  else{
    echo "<script>";
    echo "alert('User Not Registered')"; 
    echo "</script>";
  }
}
?>

<!DOCTYPE html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/jpg" href="imgs/www.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="980206925436-po12jj5gai9htsvpheakbblm989i1po5.apps.googleusercontent.com">
<style>
</style>
</head>
    <body  style="margin: 0% ; background-image:url('imgs/pcback.jpg') " class="bgpage">
    <header>
        <nav>
            <div class="topnav">
                <a class="active" href="index.php"><p><b>HoMe</b></p></a>
                <a href="pcbuilder.php"><p><b>pcbuiLdeR</b></p></a>
                <a href="guide.php"><p><b>Guide</b></p></a>
                <a href="knowledgebase.php"><p><b>knoWledGe-bAse</b></p></a>
                <a href="about.php"><p><b>AbouT</b></p></a>
                <div class="dropdown" style="float:right">
                    <?php if(!empty($_SESSION["id"])){?><a class="active alignright"><p><b>
                    <?php echo "WelcoMe ", $row["names"];?></b></p></a>
                    <div class="dropdown-content">
                      <a href="profile.php"><b>pRofile</b></a>
                      <a href="logout.php"><b>loGout</b></a>
                    </div>
                  </div>

                  <?php } else{ ?>
                  <a href="login.php" class="active alignright"><p><b>LogiN/ReGisTer</b></p></a><?php } ?>
            </div>
        </nav>
    </header>

    <div style="text-align:center;line-height: 1.6rem;padding-top:2rem;border-radius: 0.3rem;">
        <div class="bg">
        <br>
        <br>
        <div><a class="backtext"><b>Login</b></a></div>
        <br>
        <br>
        
        
        <a><img src="imgs/GIF.gif" alt ="memo" style="width:12rem;height:12rem; "></a>
        
        <form class="contact-form" method="post" autocomplete="off">
            <br>
            <div>
            <div id="my-signin2" style="margin: 0 auto; "></div>
            <script>
              function onSuccess(googleUser) {
                console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
              }
              function onFailure(error) {
                console.log(error);
              }
              function renderButton() {
                gapi.signin2.render('my-signin2', {
                  'scope': 'profile email',
                  'width': 240,
                  'height': 50,
                  'longtitle': true,
                  'theme': 'dark',
                  'onsuccess': onSuccess,
                  'onfailure': onFailure
                });
              }
            </script>

            <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
            <br>
      <form class="contact-form" method="post" autocomplete="off">
          <div>
            <div class="input-box">
                <label class="input-label" style="color:white">eMAil</label><br>
                <input type="text" id="email" name="email" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" />
              </div>
              <br>
              <div class="input-box">
                <label class="input-label" style="color:white">pAssword</label><br>
                <input type="password" id="password" name="password" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" />
              </div>
          <br>
          <div style="text-align: center;">
      
            <button class="button" type="submit" id="submit" name="submit"><b>Login...</b></button>
          <!--<button type="submit">Submit</button>-->
          <br>
          <br>
          </div>
        </div>
      </form>
        <a style="color:white">don't HAve An Account yet ?<br>
        <a style="text-decoration: none; color: #76B900" href="register.php ">ReGisTer Here!</a>
        </a>
      </div>
    </div>
  </div>
</body>
</html>