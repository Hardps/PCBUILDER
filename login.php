<!DOCTYPE html>
<head>
    <title>Login</title>
    <link rel="icon" type="image/jpg" href="imgs/www.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="980206925436-po12jj5gai9htsvpheakbblm989i1po5.apps.googleusercontent.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
.topnav {
  overflow: hidden;
  background-color: #000000;
  border-radius: 0.3rem;
  width: 100%;
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
.backtext {
  text-align:center; 
  background-color: #76B900; 
  font-family: 'Major Mono Display', monospace; 
  font-size: 3.5rem; 
  border-radius: 0.3rem;
  line-height: 1.6rem;
  padding:2rem
}
.bg { 
  text-align:center;
  float: center;
  background-color: black; 
  font-family: 'Major Mono Display', monospace; 
  border-radius: 0.3rem;
  padding:1.7rem;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
.float-parent-element { 
  /*width: 50%;*/
  text-align: center;
} 
.float-child-element { 
  display: inline-block;
  padding: 1rem 1rem;
  vertical-align: middle;
} 
.form__input {
  border: 2px solid #e1e5ee;
  border-radius: 0.2rem;
  font-family: inherit;
  font-size: inherit;
  color: white;
  outline: none;
  padding: 1.25rem;
  background: none;
  background-color: #000000;
  border-radius: 0.5rem;
  /* Change border when input focus*/
}
.form__input:hover {
  transition:0.3s;
  border-color: #e70f0f;
}
.form__input:focus {
  transition:0.3s;
  border-color: #ff2018;
}
.form__label {
  position: absolute;
  font-family: 'Press Start 2P', cursive;
  font-size:0.6rem;
  padding: 0 0.5rem;
  color: white;
  cursor: text;
  border-radius: 0.5rem;
  transition: top 200ms ease-in, left 200ms ease-in, font-size 200ms ease-in;
  background-color: #000000;
}
.form__input:focus ~ .form__label,
.form__input:not(:placeholder-shown).form__input:not(:focus) ~ .form__label {
  
  font-size: 0.8rem;
}

</style>
</head>
<body  style="margin: 0% ; background-image:url('imgs/pcback.jpg')" class="curve">
    <header>
        <nav>
            <div class="topnav">
                <a class="active" href="index.php"><p><b>HoMe</b></p></a>
                <a href="pcbuilder.php"><p><b>pcbuiLdeR</b></p></a>
                <a href="guide.php"><p><b>Guide</b></p></a>
                <a href="knowledgebase.php"><p><b>knoWledGe-bAse</b></p></a>
                <a href="about.php"><p><b>AbouT</b></p></a>
                <a href="login.php" class="active alignright"><p><b>LogiN/ReGisTer</b></p></a>
            </div>
        </nav>
    </header>
<div class="container">
    <div style="text-align:center;line-height: 1.6rem;padding-top:2rem;border-radius: 0.3rem;">
        <div class="bg">
        <br>
        <br>
        <span class="backtext"><b>Login</b></span>
        <br>
        <br>
        <div class="float-parent-element">
        <div class="float-child-element">
        <a><img src="imgs/GIF.gif" alt ="memo" style="width:12rem;height:12rem;"></a>
        </div>
        <div class="float-child-element">
          <div id="my-signin2"></div>
            <script>
              function onSuccess(googleUser) {
                console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
              }
              function onFailure(error) {
                console.log(error);
              }
              function renderButton() {
                gapi.signin2.render('my-signin2', {
                  'scope': 'profile email',
                  'width': 240,
                  'height': 50,
                  'longtitle': true,
                  'theme': 'dark',
                  'onsuccess': onSuccess,
                  'onfailure': onFailure
                });
              }
            </script>

            <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
        <form class="contact-form">
            <br>
          <div>
            <div class="input-box">
                <label class="input-label" style="color:white">useRname</label>
                <input type="text" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" />
              </div>
              <br>
              <div class="input-box">
                <label class="input-label" style="color:white">pAssword</label>
                <input type="password" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" />
              </div>
          <br>
          <div style="text-align: center;">
      
            <button class="button" type="submit" style="vertical-align:middle; font-family: 'Major Mono Display', monospace, cursive;font-size: 1rem; line-height: 1.6rem; text-align:center; background-color: #76B900; border-radius: 0.3rem; padding:0.7rem "><b>Login...</b></button>
          <!--<button type="submit">Submit</button>-->
          <br>
          <br>
          </div>
        </div>
        </form>
        <a style="color:white">don't HAve An Account yet ?<br>
        <a style="color:white" href="register.php ">ReGisTer Here!</a>
        </a>
      </div>
      </div>
    </div>
  </div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</div>
</body>
</html>