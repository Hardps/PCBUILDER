<?php include 'welcome.php' ?>
<!DOCTYPE html>
<head>
    <title>Home</title>
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
                  <a class="active" href="index.php"><p><b>HoMe</b></p></a>
                  <a href="pcbuilder.php"><p><b>pcbuilder</b></p></a>
                  <a href="guide.php"><p><b>guide</b></p></a>
                  <a href="knowledgebase.php"><p><b>knowledge-base</b></p></a>
                  <a href="about.php"><p><b>about</b></p></a>
                  <?php if(!empty($_SESSION["id"])){
                  if ($row["names"] == "admin"){?>
                  <a href="admin.php"><p><b>admin</b></p></a>
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
  <?php include 'footer.php'; ?>
</html>