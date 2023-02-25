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
        <br>
        <div class="bg" style="width:95%">
          <div>
            <br>
            <a class="backtext"><b>cpu</b></a>
            <br>
            <br>
          </div>
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
                  <td><a href=\"deleterow.php?id=".$row["id"]."\"><button class='button'><b>delete</b></button></a></td>
                </tr>";
                } ?>
              </table>
              <br>
              <br>
              <div style="text-align: center;">
                <button class="button" type="submit" id="submit" name="submit" onclick="window.location.href='addcpu.php';"><b>add more</b></button>
                <!--<button type="submit">Submit</button>-->
              </div>
            </div>
            <div>
              <br>
              <br>
              <a class="backtext"><b>MotHeRboARd</b></a>
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
                  <th>type</th>
                  <th>action</th>
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
                  <td>".$row["types"]."</td>
                  <td><a href=\"deleterow.php?mid=".$row["id"]."\"><button class='button'><b>delete</b></button></a></td>
                </tr>";
                } ?>
              </table>
              <div style="text-align: center;">
                <br>
                <br>
                <button class="button" type="submit" id="submit" name="submit" onclick="window.location.href='addmotherboard.php';"><b>add more</b></button>
                <!--<button type="submit">Submit</button>-->
              </div>
            </div>
            <div>
              <br>
              <br>
              <a class="backtext"><b>RAM</b></a>
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
                  <th>action</th>
                </tr>
                <?php 
                $sql = "SELECT * FROM ram";
                $result = mysqli_query($conn, $sql);              
                while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                  <td>".$row["brand"]."</td>
                  <td>"."ddr".$row["dram"]."</td>
                  <td>".$row["capacity"]." gb"."</td>
                  <td>".$row["channel"]."</td>
                  <td>".$row["mhz"].' mhz'."</td>
                  <td><a href=\"deleterow.php?rid=".$row["id"]."\"><button class='button'><b>delete</b></button></a></td>
                </tr>";
                } ?>
              </table>
              <div style="text-align: center;">
                <br>
                <br>
                <button class="button" type="submit" id="submit" name="submit" onclick="window.location.href='addram.php';"><b>add more</b></button>
                <!--<button type="submit">Submit</button>-->
              </div>
            </div>
            <div>
              <br>
              <br>
              <a class="backtext"><b>Gpu</b></a>
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
                  <th>action</th>
                </tr>
                <?php 
                $sql = "SELECT * FROM gpu";
                $result = mysqli_query($conn, $sql);              
                while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                  <td>".$row["brand"]."</td>
                  <td>".$row["model"]."</td>
                  <td>".$row["vram"]." gb"."</td>
                  <td>"."gddr".$row["gddr"]."</td>
                  <td>".$row["rtx/gtx"]."</td>
                  <td>".$row["company"]."</td>
                  <td><a href=\"deleterow.php?gid=".$row["id"]."\"><button class='button'><b>delete</b></button></a></td>
                </tr>";
                } ?>
              </table>
              <div style="text-align: center;">
                <br>
                <br>
                <button class="button" type="submit" id="submit" name="submit" onclick="window.location.href='addgpu.php';"><b>add more</b></button>
                <!--<button type="submit">Submit</button>-->
              </div>
            </div>
            <div>
              <br>
              <br>
              <a class="backtext"><b>poWeR supply</b></a>
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
                  <th>action</th>
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
                  <td><a href=\"deleterow.php?pid=".$row["id"]."\"><button class='button'><b>delete</b></button></a></td>
                </tr>";
                } ?>
              </table>
              <div style="text-align: center;">
                <br>
                <br>
                <button class="button" type="submit" id="submit" name="submit" onclick="window.location.href='addpsu.php';"><b>add more</b></button>
                <!--<button type="submit">Submit</button>-->
              </div>
            </div>
            <div>
              <br>
              <br>
              <a class="backtext"><b>stoRAGe</b></a>
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
                  <th>action</th>
                </tr>
                <?php 
                $sql = "SELECT * FROM storage";
                $result = mysqli_query($conn, $sql);              
                while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                  <td>".$row["brand"]."</td>
                  <td>".$row["model"]."</td>
                  <td>".$row["types"]."</td>
                  <td>".$row["capacity"]."</td>
                  <td><a href=\"deleterow.php?sid=".$row["id"]."\"><button class='button'><b>delete</b></button></a></td>
                </tr>";
                } ?>
              </table>
              <div style="text-align: center;">
                <br>
                <br>
                <button class="button" type="submit" id="submit" name="submit" onclick="window.location.href='addstorage.php';"><b>add more</b></button>
                <!--<button type="submit">Submit</button>-->
              </div>
            </div>
            <div>
              <br>
              <br>
              <a class="backtext"><b>cAse</b></a>
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
                  <th>action</th>
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
                  <td><a href=\"deleterow.php?cid=".$row["id"]."\"><button class='button'><b>delete</b></button></a></td>
                </tr>";
                } ?>
              </table>
              <div style="text-align: center;">
                <br>
                <br>
                <button class="button" type="submit" id="submit" name="submit" onclick="window.location.href='addcase.php';"><b>add more</b></button>
                <!--<button type="submit">Submit</button>-->
              </div>
            </div>
            <div>
              <br>
              <br>
              <a class="backtext"><b>coolinG systeM</b></a>
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
                  <th>action</th>
                </tr>
                <?php 
                $sql = "SELECT * FROM cool";
                $result = mysqli_query($conn, $sql);              
                while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                  <td>".$row["brand"]."</td>
                  <td>".$row["model"]."</td>
                  <td>".$row["types"]."</td>
                  <td>".$row["size"]."</td>
                  <td><a href=\"deleterow.php?coid=".$row["id"]."\"><button class='button'><b>delete</b></button></a></td>
                </tr>";
                } ?>
              </table>
              <div style="text-align: center;">
                <br>
                <br>
                <button class="button" type="submit" id="submit" name="submit" onclick="window.location.href='addcool.php';"><b>add more</b></button>
                <!--<button type="submit">Submit</button>-->
              </div>
            </div>
            <div>
              <br>
              <br>
              <a class="backtext"><b>MonitoR</b></a>
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
                  <th>action</th>
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
                  <td><a href=\"deleterow.php?moid=".$row["id"]."\"><button class='button'><b>delete</b></button></a></td>
                </tr>";
                } ?>
              </table>
              <div style="text-align: center;">
                <br>
                <br>
                <button class="button" type="submit" id="submit" name="submit" onclick="window.location.href='addmonitor.php';"><b>add more</b></button>
                <!--<button type="submit">Submit</button>-->
              </div>
            </div>
        </div>

  </body>
  <?php include 'footer.php'; ?>
</html>