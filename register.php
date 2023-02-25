<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $names = $_POST["names"];
  $lastnames = $_POST["lastnames"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO users VALUES('','$names', '$lastnames','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
      header("Location: register.php");
    }
    header("Location: login.php");
  }
}
?>

<!DOCTYPE html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/jpg" href="imgs/www.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">
    <meta name="google-signin-client_id" content="980206925436-po12jj5gai9htsvpheakbblm989i1po5.apps.googleusercontent.com">

</head>
    <body  style="margin: 0% ; background-image:url('imgs/pcback.jpg') " class="bgpage">
    <header>
        <nav>
            <div class="topnav">
                <a class="active" href="index.php"><p><b>HoMe</b></p></a>
                <a href="pcbuilder.php"><p><b>pcbuilder</b></p></a>
                <a href="guide.php"><p><b>guide</b></p></a>
                <a href="knowledgebase.php"><p><b>knowledge-base</b></p></a>
                <a href="about.php"><p><b>about</b></p></a>
                <div class="dropdown" style="float:right">
                    <?php if(!empty($_SESSION["id"])){?><a class="active alignright"><p><b>
                    <?php echo "WelcoMe ", $row["names"];?></b></p></a>
                    <div class="dropdown-content">
                      <a href="profile.php"><b>profile</b></a>
                      <a href="logout.php"><b>logout</b></a>
                    </div>
                  </div>

                  <?php } else{ ?>
                  <a href="login.php" class="active alignright"><p><b>login/register</b></p></a><?php } ?>
            </div>
        </nav>
    </header>

    <div class="form">
        <div class="bg">
        <br>
        <br>
        <span class="backtext"><b>ReGisTer</b></span>
        <br>
        <br>
        <div id="my-signin2"></div>
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
        <form class="contact-form" method="post" autocomplete="off">
        <br>
        <div >
            <div class="input-box">
                <label class="input-label" style="color:white">fiRst nAme</label><br>
                <input type="text" id="names" name="names" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id="names" required value=""/>
            </div>
              <br>
              <div class="input-box">
                <label class="input-label" style="color:white">lAst nAme</label><br>
                <input type="text" id="lastnames" name="lastnames" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id="lastnames" required value=""/>
            </div>
            <br>
            <div class="input-box">
                <label class="input-label" style="color:white">eMAil</label><br>
                <input type="text" id="email" name="email" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id="email" required value=""/>
            </div>
            <br>
            <div class="input-box">
                <label class="input-label" style="color:white">pAssword</label><br>
                <input type="password" id="password" name="password" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id="password" required value=""/>
            </div>
            <br>
            <div class="input-box">
                <label class="input-label" style="color:white">confiRM pAssword</label><br>
                <input type="password" id="confirmpassword" name="confirmpassword" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id="password" required value=""/>
            </div>
            <br>

          <div style="text-align: center;">
      
            <button class="button" type="submit" value="submit" name="submit" style="vertical-align:middle; font-family: 'Major Mono Display', monospace, cursive;font-size: 1rem; line-height: 1.6rem; text-align:center; background-color: #76B900; border-radius: 0.3rem; padding:0.7rem "><b>ReGisTer...</b></button>
          <!--<button type="submit">Submit</button>-->
          <br>
          <br>
          </div>
        </div>
        </form>
        <a style="color:white">AlReady HAve An Account ?<br>
        <a style="color: #76B900; text-decoration: none" href="login.php">Login Here!</a>
        </a>
      </div>
    </div>

</body>
<?php include 'footer.php'; ?>
</html>