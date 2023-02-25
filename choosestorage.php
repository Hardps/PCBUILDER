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
                    <a href="pcbuilder.php"><p><b>pcbuilder</b></p></a>
                    <a href="guide.php"><p><b>guide</b></p></a>
                    <a class="active" href="knowledgebase.php"><p><b>knowledge-base</b></p></a>
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
                  <a href="login.php" class="active alignright"><p><b>login/register</b></p></a><?php } ?>
                </div>
            </nav>
            </header>
            <div style="text-align:center;line-height: 1.6rem;padding-top:2rem;border-radius: 0.3rem;">
          <div class="bg">
            <br>
            <br>
              <div>
                <a class="backtext"><b>HoW to cHoose stoRAGe </b></a>
              </div>
            <br>
            <br>
            <div class="content">
              <p>lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. nibh nisl condimentum id venenatis a condimentum. eu lobortis elementum nibh tellus molestie nunc non. lorem dolor sed viverra ipsum nunc. non nisi est sit amet facilisis magna etiam tempor orci. vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique. odio tempor orci dapibus ultrices. leo duis ut diam quam. nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. imperdiet proin fermentum leo vel orci porta non pulvinar neque. magna ac placerat vestibulum lectus mauris ultrices. vel quam elementum pulvinar etiam non quam. nullam vehicula ipsum a arcu cursus vitae. nunc sed id semper risus in hendrerit. faucibus pulvinar elementum integer enim. massa id neque aliquam vestibulum morbi blandit. quis viverra nibh cras pulvinar mattis. ullamcorper velit sed ullamcorper morbi tincidunt ornare massa. faucibus vitae aliquet nec ullamcorper.</p>
              <p>nibh mauris cursus mattis molestie a. mauris ultrices eros in cursus turpis massa tincidunt dui. nunc mattis enim ut tellus elementum sagittis vitae et leo. ullamcorper morbi tincidunt ornare massa eget egestas purus. venenatis a condimentum vitae sapien pellentesque habitant morbi. eget velit aliquet sagittis id consectetur purus ut. cras sed felis eget velit aliquet sagittis id consectetur purus. amet commodo nulla facilisi nullam vehicula. a lacus vestibulum sed arcu non odio. vulputate eu scelerisque felis imperdiet proin. egestas pretium aenean pharetra magna ac placerat vestibulum lectus. cursus euismod quis viverra nibh cras. varius vel pharetra vel turpis nunc eget lorem dolor sed. placerat vestibulum lectus mauris ultrices eros in cursus turpis massa. eros in cursus turpis massa tincidunt dui ut ornare lectus.</p>
              <p>id aliquet risus feugiat in ante metus dictum. vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa. elit ut aliquam purus sit. fermentum posuere urna nec tincidunt praesent. at erat pellentesque adipiscing commodo elit. habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. vel risus commodo viverra maecenas accumsan lacus vel facilisis volutpat. ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at augue eget. elit sed vulputate mi sit amet mauris commodo quis. pulvinar proin gravida hendrerit lectus a. lectus mauris ultrices eros in. erat nam at lectus urna duis convallis convallis. sed faucibus turpis in eu. diam volutpat commodo sed egestas egestas. commodo odio aenean sed adipiscing diam donec adipiscing tristique. senectus et netus et malesuada fames. malesuada fames ac turpis egestas.</p>
              <p>id nibh tortor id aliquet lectus proin nibh nisl condimentum. tempor commodo ullamcorper a lacus vestibulum sed arcu. tellus orci ac auctor augue mauris augue neque. sapien et ligula ullamcorper malesuada. augue neque gravida in fermentum et sollicitudin. purus sit amet volutpat consequat mauris nunc congue nisi. malesuada pellentesque elit eget gravida. arcu non odio euismod lacinia at. vulputate eu scelerisque felis imperdiet proin fermentum leo vel. morbi tincidunt ornare massa eget egestas purus. tristique senectus et netus et malesuada fames ac turpis egestas. quisque sagittis purus sit amet volutpat consequat. viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat. leo vel fringilla est ullamcorper eget nulla facilisi etiam. imperdiet proin fermentum leo vel. orci phasellus egestas tellus rutrum tellus pellentesque eu.</p>
              <p>cras semper auctor neque vitae tempus quam. risus sed vulputate odio ut enim blandit volutpat maecenas. senectus et netus et malesuada fames ac turpis. leo integer malesuada nunc vel risus commodo viverra. aliquam nulla facilisi cras fermentum odio eu. quam vulputate dignissim suspendisse in est ante in nibh. id aliquet lectus proin nibh nisl condimentum. convallis convallis tellus id interdum velit laoreet id donec ultrices. etiam non quam lacus suspendisse faucibus interdum posuere lorem. eget lorem dolor sed viverra ipsum. felis eget nunc lobortis mattis aliquam faucibus purus in massa. ut pharetra sit amet aliquam. mi sit amet mauris commodo quis imperdiet massa. amet nulla facilisi morbi tempus iaculis. massa placerat duis ultricies lacus sed. consectetur adipiscing elit duis tristique. nunc id cursus metus aliquam eleifend mi in nulla.</p>
              <p>accumsan lacus vel facilisis volutpat est velit egestas. viverra mauris in aliquam sem fringilla ut morbi. suscipit tellus mauris a diam maecenas sed enim. malesuada nunc vel risus commodo viverra maecenas. diam quis enim lobortis scelerisque fermentum dui faucibus in. sit amet est placerat in egestas erat imperdiet sed euismod. elit ullamcorper dignissim cras tincidunt. egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium. dignissim cras tincidunt lobortis feugiat. nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum.</p>
            </div>
          </div>
        </div>
</body>
<?php include 'footer.php'; ?>
</html>