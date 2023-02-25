<?php
require 'welcome.php';

if(isset($_SESSION["id"])){
  $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'");
}
else{
  header("Location: index.php");
}
if (mysqli_num_rows($duplicate) > 0) {
  //fetch the user information as an associative array
  $users = mysqli_fetch_assoc($duplicate);
}
?>

<!DOCTYPE html>
<head>
    <title>Profile</title>
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
              <div class="backtext"><b>profile</b></div>
              <br>
                <div class="card">
                  <img src="imgs/homer.png" alt="cpu" class="profileimg">
                  <p>
                      <label for="names">first name:<br><?php echo $users['names']; ?></label>
                  </p>
                  <p>
                      <label for="lastnames">last name:<br><?php echo $users['lastnames']; ?></label>
                  </p>
                  <p>
                      <label for="email">email:<br><?php echo $users['email']; ?></label>
                  </p>
                  <p>
                      <label for="password">password:<br><?php echo $users['password']; ?></label>
                  </p>
                  <br>
                  <div style="text-align: center;">
                    <a href="editprofile.php"><button class="button" type="submit" value="submit" name="submit" style="vertical-align:middle; font-family: 'Major Mono Display', monospace, cursive;font-size: 1rem; line-height: 1.6rem; text-align:center; background-color: #76B900; border-radius: 0.3rem; padding:0.7rem "><b>edit profile</b></button></a>
                    <!--<button type="submit">Submit</button>-->
                    <br>
                  </div>
                </div>
              </div>
            </div>

</body>
<?php include 'footer.php'; ?>
</html>