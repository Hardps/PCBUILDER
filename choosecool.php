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
</body>
</html>