<?php include 'welcome.php' ?>
<!DOCTYPE html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/jpg" href="imgs/www.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">

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
          </nav>
        </header>
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