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
if (isset($_POST['update'])) {
    //get the form data
    $names = $_POST['names'];
    $lastnames = $_POST['lastnames'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //update the user information in the database
    $query = "UPDATE users SET names ='$names', lastnames ='$lastnames', email ='$email', password ='$password' WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    //check if the update was successful
    if ($result) {
        echo
      "<script> alert('Your details have been updated successfully'); </script>";
      header("Location: profile.php");
    } else {
        echo
      "<script> alert('Failed to update your information'); </script>";
      header("Location: editprofile.php");
    }
}
?>

<!DOCTYPE html>
<head>
    <title>Edit Profile</title>
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
        <span class="backtext"><b>update profile</b></span>
        <br>
        <br>
        <?php
        if (mysqli_num_rows($result) > 0) {
            //fetch the user information as an associative array
            $user = mysqli_fetch_assoc($result);
            ?>
    <form class="contact-form" method="post" autocomplete="off">
        <br>
        <div>
            <div class="input-box">
                <label class="input-label" style="color:white">fiRst nAme</label><br>
                <?php echo "<input type='text' name='names' value='".$users['names']."'>";?>
            </div>
              <br>
              <div class="input-box">
                <label class="input-label" style="color:white">lAst nAme</label><br>
                <?php echo "<input type='text' name='lastnames' value='".$users['lastnames']."'>";?>
            </div>
            <br>
            <div class="input-box">
                <label class="input-label" style="color:white">eMAil</label><br>
                <?php echo "<input type='text' name='email' value='".$users['email']."'>";?>
            </div>
            <br>
            <div class="input-box">
                <label class="input-label" style="color:white">pAssword</label><br>
                <?php echo "<input type='text' name='password' value='".$users['password']."'>";?>
            </div>
            <br>
            <br>
          <div style="text-align: center;">
            <button class="button" type="submit" value="submit" name="update" style="vertical-align:middle; font-family: 'Major Mono Display', monospace, cursive;font-size: 1rem; line-height: 1.6rem; text-align:center; background-color: #76B900; border-radius: 0.3rem; padding:0.7rem "><b>update info</b></button>
          <!--<button type="submit">Submit</button>-->
          <br>
          <br>
          </div>
        </div>
        </form>
        <?php } 
        else{
            echo "No user found";
        }?>
        </div>
    </div>

</body>
<?php include 'footer.php'; ?>
</html>