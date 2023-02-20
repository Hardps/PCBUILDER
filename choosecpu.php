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
        <div style="text-align:center;line-height: 1.6rem;padding-top:2rem;border-radius: 0.3rem;">
          <div class="bg">
            <br>
            <br>
              <div>
                <a class="backtext"><b>HoW to cHoose A cpu </b></a>
              </div>
            <br>
            <br>
            <div class="content">
                <p>
                every computer needs a motherboard, and every motherboard needs a cpu. the cpu, which stands for central processing unit, determines how much data a computer can handle at one time and how quickly it can handle that data.                </p>
                <p>
                amd or intel? choosing a new cpu doesn't have to be hard. you want the best bang for your buck and this guide will help you accomplish just that.
                </p>
                <p>
                if you’re new to pc building and are only now putting together your first pc, then the amount of information involved when it comes to picking even a single component will no doubt seem intimidating at first. 
                </p>
                <p>
                however, <b>it’s simpler than you might think!</b>
                </p>
                <br>
                <h1>
                <p>
                today’s cpu choices
                </p>
                </h1>
                <h2>
                <p>
                <b>desktop cpus</b>
                </p>
                </h2>
                <p>
                desktop cpus were created for desktop computers. while the cpus for desktops basically perform the same functions as cpus for mobile devices (such as laptops) and servers, desktop cpus are built a little differently to handle the needs of desktop computer users. for example, one advantage that desktop cpus offer is that they are able to offer a higher thermal tolerance. desktop processors are also more compatible with overclocking.
                </p>
                <h2>
                <p>
                <b>mobile processors</b>
                </p>
                </h2>
                <p>
                mobile processors are created for laptops and mobile devices such as smartphones. mobile processors tend to be slower and have less power than desktop processors, mainly to conserve battery power. however, many do offer features that desktop processors do not, such as wireless display technology (widi). this technology allows the wireless transmission of media files to a television, for example.
                </p>
                <h2>
                <p>
                <b>server processors</b>
                </p>
                </h2>
                <p>
                server processors are built for high reliability. when these processors are tested, they are put through stressful conditions such as higher temperatures and high computing loads. if your desktop processor fails, the entire computer becomes inoperable. server cpus, however, have “failovers” – where standby equipment automatically takes over when the main system fails – such as dual cpu servers. they are also designed to operate at much higher frequencies, enabling them to process more data.
                </p>
                <h1>
                <p>
                features to consider
                </p>
                </h1>
                <p>
                if you look up the specifications of any cpu, you’ll find a slew of numbers and abbreviations. these are all important in one way or another, but when it comes to gaming, the key specifications to keep in mind are the following:
                  <ul>
                    <li><b>core count</b> – the number of physical cores that the cpu has. more cores equals better multitasking and more processing power in certain programs, provided that the software is optimized to take advantage of it.</li>
                    <li><b>thread count</b> – the number of logical cores that the cpu has. amd’s simultaneous multithreading and intel’s hyper-threading technologies both allow for a single physical core to handle two tasks simultaneously, thus further smoothing out overall system performance and improving performance in games or programs that are optimized to take advantage of multiple threads.</li>
                    <li><b>clock speed</b> – this is the default clock speed (expressed in ghz) at which a single cpu core operates. higher clock speeds mean better single-core performance, allowing the cpu to process more data in a shorter period of time.</li>
                    <li><b>boost clock/turbo frequency</b> – the maximum clock speed achievable by the cpu with amd’s precision boost and intel’s turbo boost technologies.</li>
                    <li><b>overclocking</b> – indicates whether the cpu is unlocked and supports overclocking i.e. whether the stock clock speed can be pushed beyond the default factory settings via tweaking.</li>
                    <li><b>socket</b> – the type of motherboard socket that the cpu is compatible with.</li>
                    <li><b>cache</b> – each cpu comes with a small onboard memory cache that it can use to store important data. as such, a larger cache can help both with speed and stability, resulting in smoother performance and fewer crashes.</li>
                    <li><b>system memory</b> – the type of system ram supported by the cpu, along with the maximum supported ram capacity, maximum supported number of memory channels, and the native ram speed that the cpu officially supports.</li>
                    <li><b>tdp</b> – short for thermal design power and expressed in watts, this spec indicates the cpu’s power draw and its heat output when it is operating at stock clock speeds.
                  </ul>
                </p>
                <p>
                however, the truth is, on-paper specifications are usually a terrible way to estimate as to how the cpu will fare in practice, as the exact performance will inevitably vary from game to game and from program to program.
                </p><br>
                <h1>
                <p>
                which specifications pertain to me?
                </p>
                </h1>
                <h2>
                which cpu is best for me?
                </h2>
                <p>
                  <b>home users</b>
                  <ul>
                    <li>socket compatibility</li>
                    <li>integrated gpu</li>
                    <li>frequency</li>
                  </ul>
                </p>
                <p>
                  <b>home office users</b>
                  <ul>
                    <li>cores</li>
                    <li>memory</li>
                    <li>frequency</li>
                  </ul>
                </p>
                <p>
                  <b>small business users</b>
                  <ul>
                    <li>cost</li>
                    <li>compatibility</li>
                    <li>bga or lga</li>
                  </ul>
                </p>
                <p>
                  <b>corporate users</b>
                  <ul>
                    <li>cores</li>
                    <li>frequency</li>
                    <li>thermal design power</li>
                  </ul>
                </p>
                <p>
                  <b>gamers</b>
                  <ul>
                    <li>cores</li>
                    <li>frequency</li>
                    <li>thermal design power</li>
                  </ul>
                </p>
                <p>
                  <b>servers</b>
                  <ul>
                    <li>cores</li>
                    <li>thermal design power</li>
                    <li>threading</li>
                  </ul>
                </p>
                <p>
                  <b>mobile users</b>
                  <ul>
                    <li>cores</li>
                    <li>socket compatibility</li>
                    <li>frequency</li>
                  </ul>
                </p>
              </div>
          </div>
        </div>
    </body>
</html>