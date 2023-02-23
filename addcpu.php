<?php
include 'welcome.php';
if(isset($_POST["submit"])){
  $brand = $_POST["brand"];
  $model = $_POST["model"];
  $generation = $_POST["generation"];
  $cores = $_POST["cores"];
  $threads = $_POST["threads"];
  $baseclock = $_POST["baseclock"];
  $socket = $_POST["socket"];
  $duplicate = mysqli_query($conn, "SELECT * FROM cpu WHERE (model = '$model' AND generation = '$generation' AND cores = '$cores')");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('product already added'); </script>";
  }
  else{
      $query = "INSERT INTO cpu VALUES('','$brand', '$model','$generation','$cores','$threads','$baseclock','$socket')";
      mysqli_query($conn, $query);
      echo
    "<script> alert('product added'); </script>";
  }
}

?>
<!DOCTYPE html>
<head>
    <title>Add CPU</title>
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
                  <a href="pcbuilder.php"><p><b>pcbuiLdeR</b></p></a>
                  <a href="guide.php"><p><b>Guide</b></p></a>
                  <a href="knowledgebase.php"><p><b>knoWledGe-bAse</b></p></a>
                  <a href="about.php"><p><b>AbouT</b></p></a>
                  <?php if(!empty($_SESSION["id"])){
                  if ($row["names"] == "admin"){?>
                  <a class="active" href="admin.php"><p><b>AdMin</b></p></a>
                  <?php }?>
                  <?php }?>
                  <div class="dropdown" style="float:right">
                    <?php if(!empty($_SESSION["id"])){?><a class="active alignright"><p><b>
                    <?php echo "WelcoMe ", $row["names"];?></b></p></a>
                    <div class="dropdown-content">
                      <a href="profile.php"><b>pRofile</b></a>
                      <a href="logout.php"><b>loGout</b></a>
                    </div>
                  </div>
                  <?php } else{ ?>
                  <a href="login.php" class="active alignright"><p><b>LogiN/ReGisTer</b></p></a>
                  <?php } ?>

          </nav>
        </header>
        <br>
        <div class="form" >
        <div class="bg">
              <div>
                <a class="backtext"><b>add cpu</b></a>
              </div>
            <br>
            <br>
            <div class="content">
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
                <label class="input-label" style="color:white">generation</label><br>
                <input type="text" id="generation" name="generation" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id="generation" required value=""/>
            </div>
            <br>
            <div class="input-box">
                <label class="input-label" style="color:white">cores</label><br>
                <input type="text" id="cores" name="cores" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id="cores" required value=""/>
            </div>
            <br>
            <div class="input-box">
                <label class="input-label" style="color:white">threads</label><br>
                <input type="text" id="threads" name="threads" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id="cores" required value=""/>
            </div>
            <br>
            <div class="input-box">
                <label class="input-label" style="color:white">baseclock</label><br>
                <input type="text" id="baseclock" name="baseclock" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id="baseclock" required value=""/>
            </div>
            <br>
            <div class="input-box">
                <label class="input-label" style="color:white">socket</label><br>
                <input type="text" id="socket" name="socket" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id="socket" required value=""/>
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