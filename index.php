<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<head>
    <title>Home</title>
    <link rel="icon" type="image/jpg" href="imgs/www.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">

<style>
.topnav {
  overflow: hidden;
  background-color: #000000;
}

.topnav a.alignright{
    float: right;
}

.topnav a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
  font-family: 'Major Mono Display', monospace;
}

.topnav a:hover {
  background-color: #76B900;
  color: black;
}

.topnav a.active {
  background-color: #76B900;
  color: black;
}

/* .bgpage {
  background-repeat: no-repeat;
  background-attachment: fixed;
} */
</style>
</head>
    <body  style="margin: 0% ; background-image:url('imgs/pcback.jpg') ">
        <header>
            <nav>
                <div class="topnav">
                    <a class="active" href="index.php"><p><b>HoMe</b></p></a>
                    <a href="pcbuilder.php"><p><b>pcbuiLdeR</b></p></a>
                    <a href="guide.php"><p><b>Guide</b></p></a>
                    <a href="knowledgebase.php"><p><b>knoWledGe-bAse</b></p></a>
                    <a href="about.php"><p><b>AbouT</b></p></a>
                    <?php if(!empty($_SESSION["id"])){?> <a class="active alignright"><h1> <?php echo "Welcome ", $row["names"];} else{ ?></h1></a>
                    <a href="login.php" class="active alignright"><p><b>LogiN/ReGisTer</b></p></a><?php } ?>  
                </div>
            </nav>
            </header>
            <br>
            
            <br>
            <?php if(!empty($_SESSION["id"])){ ?><a href="logout.php">Logout</a> <?php } ?>
            <br>
    <!-- <div class="container">
      <div class="row">
        <div class="col-4">
          <div class="card text-center text-white bg-dark mb-3">
            <img src="imgs/colormotherboard.png" alt="Motherboard Image">
            <div class="card-body">
              <h5 class="card-title">Motherboard</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer interdum odio in felis mattis feugiat. In rhoncus libero magna, ultricies condimentum tortor tempor sit amet.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card text-center text-white bg-dark mb-3">
            <img src="imgs/colorcpu.png" alt="CPU Image">
            <div class="card-body">
              <h5 class="card-title">CPU</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer interdum odio in felis mattis feugiat. In rhoncus libero magna, ultricies condimentum tortor tempor sit amet.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card text-center text-white bg-dark mb-3">
            <img src="imgs/ram-memory.png" alt="Ram Image">
            <div class="card-body">
              <h5 class="card-title">Ram</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer interdum odio in felis mattis feugiat. In rhoncus libero magna, ultricies condimentum tortor tempor sit amet.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->

</body>
</html>