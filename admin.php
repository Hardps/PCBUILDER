<?php
include 'welcome.php';
?>
<!DOCTYPE html>
<head>
    <title>Admin</title>
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
        <br>
        <div class="bg" style="width:95%">
          <div>
            <br>
            <br>
            <a class="backtext"><b>cpu</b></a>
            <br>
            <br>
            <br>
            <br>
          </div>
          <form method="post" action="deleterow.php">
            <div class="content">
              <table>
                <tr>
                  <th>brand</th>
                  <th>model</th>
                  <th>generartion</th>
                  <th>cores</th>
                  <th>threads</th>
                  <th>base-clock</th>
                  <th>action</th>
                </tr>
                <?php 
                $sql = "SELECT * FROM cpu";
                $result = mysqli_query($conn, $sql);              
                while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                  <td>".$row["brand"]."</td>
                  <td>".$row["model"]."</td>
                  <td>".$row["generation"]."</td>
                  <td>".$row["cores"]."</td>
                  <td>".$row["threads"]."</td>
                  <td>".$row["baseclock"]." ghz"."</td>
                  <td><button href='deleterow.php?id=<?php".$row['id']."?>'>Delete</button></td>
                </tr>";
                } ?>
              </table>
            </div>
            <div>
              <br>
              <br>
              <br>
              <br>
              <a class="backtext"><b>MotHeRboARd</b></a>
              <br>
              <br>
              <br>
              <br>
            </div>
            <div class="content">
              <table>
                <tr>
                  <th>brand</th>
                  <th>model</th>
                  <th>socket</th>
                  <th>max ram</th>
                </tr>
                <?php 
                $sql = "SELECT * FROM motherboard";
                $result = mysqli_query($conn, $sql);              
                while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                  <td>".$row["brand"]."</td>
                  <td>".$row["model"]."</td>
                  <td>".$row["socket"]."</td>
                  <td>".$row["maxram"]. "gb"."</td>
                </tr>";
                } ?>
              </table>
            </div>
            <div>
              <br>
              <br>
              <br>
              <br>
              <a class="backtext"><b>RAM</b></a>
              <br>
              <br>
              <br>
              <br>
            </div>
            <div class="content">
              <table>
                <tr>
                  <th>brand</th>
                  <th>dram</th>
                  <th>capacity</th>
                  <th>channel</th>
                  <th>mhz</th>
                </tr>
                <?php 
                $sql = "SELECT * FROM ram";
                $result = mysqli_query($conn, $sql);              
                while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                  <td>".$row["brand"]."</td>
                  <td>".$row["dram"]."</td>
                  <td>".$row["capacity"]." gb"."</td>
                  <td>".$row["channel"]."</td>
                  <td>".$row["mhz"]."</td>
                </tr>";
                } ?>
              </table>
            </div>
            <div>
              <br>
              <br>
              <br>
              <br>
              <a class="backtext"><b>Gpu</b></a>
              <br>
              <br>
              <br>
              <br>
            </div>
            <div class="content">
              <table>
                <tr>
                  <th>brand</th>
                  <th>model</th>
                  <th>vram</th>
                  <th>gddr</th>
                  <th>rtx/gtx</th>
                  <th>company</th>
                </tr>
                <?php 
                $sql = "SELECT * FROM gpu";
                $result = mysqli_query($conn, $sql);              
                while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                  <td>".$row["brand"]."</td>
                  <td>".$row["model"]."</td>
                  <td>".$row["vram"]." gb"."</td>
                  <td>"."gddr ".$row["gddr"]."</td>
                  <td>".$row["rtx/gtx"]."</td>
                  <td>".$row["company"]."</td>
                </tr>";
                } ?>
              </table>
            </div>
            <div>
              <br>
              <br>
              <br>
              <br>
              <a class="backtext"><b>poWeR supply</b></a>
              <br>
              <br>
              <br>
              <br>
            </div>
            <div class="content">
              <table>
                <tr>
                  <th>brand</th>
                  <th>model</th>
                  <th>wattage</th>
                  <th>certification</th>
                </tr>
                <?php 
                $sql = "SELECT * FROM psu";
                $result = mysqli_query($conn, $sql);              
                while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                  <td>".$row["brand"]."</td>
                  <td>".$row["model"]."</td>
                  <td>".$row["wattage"]." watts"."</td>
                  <td>".$row["certification"]."</td>
                </tr>";
                } ?>
              </table>
            </div>
            <div>
              <br>
              <br>
              <br>
              <br>
              <a class="backtext"><b>stoRAGe</b></a>
              <br>
              <br>
              <br>
              <br>
            </div>
            <div class="content">
              <table>
                <tr>
                  <th>brand</th>
                  <th>model</th>
                  <th>type</th>
                  <th>capacity</th>
                </tr>
                <?php 
                $sql = "SELECT * FROM storage";
                $result = mysqli_query($conn, $sql);              
                while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                  <td>".$row["brand"]."</td>
                  <td>".$row["model"]."</td>
                  <td>".$row["type"]."</td>
                  <td>".$row["capacity"]."</td>
                </tr>";
                } ?>
              </table>
            </div>
            <div>
              <br>
              <br>
              <br>
              <br>
              <a class="backtext"><b>cAse</b></a>
              <br>
              <br>
              <br>
              <br>
            </div>
            <div class="content">
              <table>
                <tr>
                  <th>brand</th>
                  <th>model</th>
                  <th>motherboard support</th>
                  <th>color</th>
                </tr>
                <?php 
                $sql = "SELECT * FROM cases";
                $result = mysqli_query($conn, $sql);              
                while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                  <td>".$row["brand"]."</td>
                  <td>".$row["model"]."</td>
                  <td>".$row["motherboardsupport"]."</td>
                  <td>".$row["color"]."</td>
                </tr>";
                } ?>
              </table>
            </div>
            <div>
              <br>
              <br>
              <br>
              <br>
              <a class="backtext"><b>coolinG systeM</b></a>
              <br>
              <br>
              <br>
              <br>
            </div>
            <div class="content">
              <table>
                <tr>
                  <th>brand</th>
                  <th>model</th>
                  <th>type</th>
                  <th>size</th>
                </tr>
                <?php 
                $sql = "SELECT * FROM cool";
                $result = mysqli_query($conn, $sql);              
                while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                  <td>".$row["brand"]."</td>
                  <td>".$row["model"]."</td>
                  <td>".$row["type"]."</td>
                  <td>".$row["size"]."</td>
                </tr>";
                } ?>
              </table>
            </div>
            <div>
              <br>
              <br>
              <br>
              <br>
              <a class="backtext"><b>MonitoR</b></a>
              <br>
              <br>
              <br>
              <br>
            </div>
            <div class="content">
              <table>
                <tr>
                  <th>brand</th>
                  <th>model</th>
                  <th>resolution</th>
                  <th>panel type</th>
                  <th>size</th>
                  <th>aspect-ratio</th>
                  <th>refresh-rate</th>
                </tr>
                <?php 
                $sql = "SELECT * FROM monitor";
                $result = mysqli_query($conn, $sql);              
                while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                  <td>".$row["brand"]."</td>
                  <td>".$row["model"]."</td>
                  <td>".$row["resolution"]."</td>
                  <td>".$row["panel"]."</td>
                  <td>".$row["size"]." in"."</td>
                  <td>".$row["ar"]."</td>
                  <td>".$row["rr"]." hz"."</td>
                </tr>";
                } ?>
              </table>
            </div>
          </form>
        </div>

  </body>
</html>