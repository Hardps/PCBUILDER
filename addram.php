<?php
include 'welcome.php';
if(isset($_POST["submit"])){
  $brand = $_POST["brand"];
  $dram = $_POST["dram"];
  $capacity = $_POST["capacity"];
  $channel = $_POST["channel"];
  $mhz = $_POST["mhz"];
  $duplicate = mysqli_query($conn, "SELECT * FROM ram WHERE (brand = '$brand' AND dram = '$dram' capacity = '$capacity' AND channel = '$channel')");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('product already added'); </script>";
  }
  else{
      $query = "INSERT INTO ram VALUES('','$brand', '$dram','$capacity','$channel','$mhz')";
      mysqli_query($conn, $query);
      echo
    "<script> alert('product added'); </script>";
  }
}

?>

<!DOCTYPE html>
<head>
    <title>Add Ram</title>
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
        <div class="form">
        <div class="bg">
            <br>
            <br>
              <div>
                <a class="backtext"><b>add ram</b></a>
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
                <label class="input-label" style="color:white">dram</label><br>
                <input type="text" id="dram" name="dram" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id="dram" required value=""/>
            </div>
            <br>
            <div class="input-box">
                <label class="input-label" style="color:white">capacity</label><br>
                <input type="text" id="capacity" name="capacity" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id="capacity" required value=""/>
            </div>
            <br>
            <div class="input-box">
                <label class="input-label" style="color:white">channel</label><br>
                <input type="text" id="channel" name="channel" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id="channel" required value=""/>
            </div>
            <br>
            <div class="input-box">
                <label class="input-label" style="color:white">mhz</label><br>
                <input type="text" id="mhz" name="mhz" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id="mhz" required value=""/>
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