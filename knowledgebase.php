<?php include 'welcome.php' ?>

<!DOCTYPE html>
<head>
    <title>Knowledge Base</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/jpg" href="imgs/www.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">

</head>
<body  style="margin: 0% ; background-image:url('imgs/pcback.jpg') " class="bgpage">
    <header>
        <nav>
            <div class="topnav">
                <a href="index.php"><p><b>HoMe</b></p></a>
                <a href="pcbuilder.php"><p><b>pcbuiLdeR</b></p></a>
                <a href="guide.php"><p><b>Guide</b></p></a>
                <a class="active" href="knowledgebase.php"><p><b>knoWledGe-bAse</b></p></a>
                <a href="about.php"><p><b>AbouT</b></p></a>
                <?php if(!empty($_SESSION["id"])){
                    if ($row["names"] == "admin"){?>
                    <a href="admin.php"><p><b>AdMin</b></p></a>
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
              <a href="login.php" class="active alignright"><p><b>LogiN/ReGisTer</b></p></a><?php } ?>
            </div>
        </nav>
    </header>
    <div class="row">
      <a href="choosecpu.php">
        <div class="column">
          <div class="card">
            <img src="imgs/cpu.jpg" alt="cpu" class="kbimg">
            <h3>HoW to cHoose A cpu</h3>
          </div>
        </div>
      </a>
      <a href="choosegpu.php">
        <div class="column">
          <div class="card">
          <img src="imgs/graphicscard.jpg" alt="GrApHics caRd" class="kbimg">
            <h3>HoW to cHoose A GrApHics caRd</h3>
          </div>
        </div>
      </a>

      <a href="choosemotherboard.php">
        <div class="column">
          <div class="card">
          <img src="imgs/motherboard.jpg" alt="MotheRboARd" class="kbimg">
            <h3>HoW to cHoose A MotheRboARd</h3>
          </div>
        </div>
      </a>
    </div>

    <div class="row">
      <a href="chooseram.php">
        <div class="column">
          <div class="card">
            <img src="imgs/ram.jpg" alt="RAM" class="kbimg">
            <h3>HoW to cHoose RAM</h3>
          </div>
        </div>
      </a>

      <a href="choosecase.php">
        <div class="column">
          <div class="card">
          <img src="imgs/case.jpg" alt="cAse" class="kbimg">
            <h3>HoW to cHoose A GAMinG cAse</h3>
          </div>
        </div>
      </a>

      <a href="choosepsu.php">
        <div class="column">
          <div class="card">
          <img src="imgs/psu.jpg" alt="poWeR supply" class="kbimg">
            <h3>HoW to cHoose A poWer supply</h3>
          </div>
        </div>
      </a>
    </div>

    <div class="row">
      <a href="choosecool.php">
        <div class="column">
          <div class="card">
            <img src="imgs/cooling.jpg" alt="coolinG systeM" class="kbimg">
            <h3>HoW to cHoose A coolinG systeM</h3>
          </div>
        </div>
      </a>

      <a href="choosestorage.php">
        <div class="column">
          <div class="card">
          <img src="imgs/ssd.jpg" alt="stoRAGe" class="kbimg">
            <h3>HoW to cHoose stoRAGe</h3>
          </div>
        </div>
      </a>

      <a href="choosemonitor.php">  
        <div class="column">
          <div class="card">
          <img src="imgs/monitor.jpg" alt="MonitoR" class="kbimg">
            <h3>HoW to cHoose A MonitoR</h3>
          </div>
        </div>
      </a>
    </div>

</body>
</html>