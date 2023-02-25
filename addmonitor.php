<?php
include 'welcome.php';
if(isset($_POST["submit"])){
  $brand = $_POST["brand"];
  $model = $_POST["model"];
  $resolution = $_POST["resolution"];
  $panel = $_POST["panel"];
  $size = $_POST["size"];
  $ar = $_POST["ar"];
  $rr = $_POST["rr"];
  $duplicate = mysqli_query($conn, "SELECT * FROM monitor WHERE (model = '$model' AND resolution = '$resolution' AND panel = '$panel' AND ar = '$ar' AND rr = '$rr')");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('product already added'); </script>";
  }
  else{
      $query = "INSERT INTO monitor VALUES('','$brand', '$model','$resolution','$panel','$size','$ar','$rr')";
      mysqli_query($conn, $query);
      echo
    "<script> alert('product added'); </script>";
  }
}

?>
<!DOCTYPE html>
<head>
    <title>Add Monitor</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/jpg" href="imgs/www.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">

</head>
  <body  style="margin: 0% ; background-image:url('imgs/pcback.jpg') ">
      <header>
          <nav>
              <div class="topnav">
                  <a href="index.php"><p><b>HoMe</b></p></a>
                  <a href="pcbuilder.php"><p><b>pcbuilder</b></p></a>
                  <a href="guide.php"><p><b>guide</b></p></a>
                  <a href="knowledgebase.php"><p><b>knowledge-base</b></p></a>
                  <a href="about.php"><p><b>about</b></p></a>
                  <?php if(!empty($_SESSION["id"])){
                  if ($row["names"] == "admin"){?>
                  <a class="active" href="admin.php"><p><b>admin</b></p></a>
                  <?php }?>
                  <?php }?>
                  <div class="dropdown" style="float:right">
                    <?php if(!empty($_SESSION["id"])){?><a class="active alignright"><p><b>
                    <?php echo "WelcoMe ", $row["names"];?></b></p></a>
                    <div class="dropdown-content">
                      <a href="profile.php"><b>profile</b></a>
                      <a href="logout.php"><b>logout</b></a>
                    </div>
                  </div>
                  <?php } else{ ?>
                  <a href="login.php" class="active alignright"><p><b>login/register</b></p></a>
                  <?php } ?>

          </nav>
        </header>
        <br>
        <div class="form" >
        <div class="bg">
              <div>
                <a class="backtext"><b>add monitor</b></a>
              </div>
            <br>
            <br>
            <div>
            <form class="contact-form" method="post" autocomplete="off">
        <br>
        <div >
            <div class="input-box">
                <label class="input-label" style="color:white">brand</label><br>
                <input type="text" id="brand" name="brand" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id="brand" required value=""/>
            </div>
              <br>
              <div class="input-box">
                <label class="input-label" style="color:white">model</label><br>
                <input type="text" id="model" name="model" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id="model" required value=""/>
            </div>
            <br>
            <div class="input-box">
                <label class="input-label" style="color:white">resolution</label><br>
                <input type="text" id="resolution" name="resolution" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id="resolution" required value=""/>
            </div>
            <br>
            <div class="input-box">
                <label class="input-label" style="color:white">panel type</label><br>
                <input type="text" id="panel" name="panel" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id="panel" required value=""/>
            </div>
            <br>
            <div class="input-box">
                <label class="input-label" style="color:white">size</label><br>
                <input type="text" id="size" name="size" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id="size" required value=""/>
            </div>
            <br>
            <div class="input-box">
                <label class="input-label" style="color:white">aspect-ratio</label><br>
                <input type="text" id="ar" name="ar" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id="ar" required value=""/>
            </div>
            <br>
            <div class="input-box">
                <label class="input-label" style="color:white">refresh-rate</label><br>
                <input type="text" id="rr" name="rr" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id="rr" required value=""/>
            </div>
            <br>

          <div style="text-align: center;">
      
            <button class="button" type="submit" value="submit" name="submit" style="vertical-align:middle; font-family: 'Major Mono Display', monospace, cursive;font-size: 1rem; line-height: 1.6rem; text-align:center; background-color: #76B900; border-radius: 0.3rem; padding:0.7rem "><b>add item</b></button>
          <!--<button type="submit">Submit</button>-->
          <br>
          <br>
          </div>
        </div>
        </form>
            </div>
        </div>
        </div>
  </body>
  <?php include 'footer.php'; ?>
</html>