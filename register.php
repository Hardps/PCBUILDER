<!DOCTYPE html>
<head>
    <title>Register</title>
    <link rel="icon" type="image/jpg" href="imgs/www.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">
    <meta name="google-signin-client_id" content="980206925436-po12jj5gai9htsvpheakbblm989i1po5.apps.googleusercontent.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<style>
.topnav {
  overflow: hidden;
  background-color: #000000;
  border-radius: 0.3rem;
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
  font-size: 50px; 
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

    <div style="text-align:center;line-height: 1.6rem;padding-top:2rem;border-radius: 0.3rem;">
        <div class="bg">
        <br>
        <br>
        <span class="backtext"><b>ReGisTer</b></span>
        <br>
        <br>
        <div id="my-signin2" style="float:center;"></div>
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
        <form class="contact-form" action="connect.php" method="">
        <br>
        <div >
            <div class="input-box">
                <label class="input-label" style="color:white">nAme</label>
                <input type="text" name="name" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id = "name" required value=""/>
            </div>
              <br>
            <div class="input-box">
                <label class="input-label" style="color:white">eMAil</label>
                <input type="text" name="email" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id = "email" required value=""/>
            </div>
            <br>
            <div class="input-box">
                <label class="input-label" style="color:white">pAssword</label>
                <input type="password" name="password" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id = "password" required value=""/>
            </div>
            <br>
            <!-- <div class="input-box">
                <label class="input-label" style="color:white">confirM pAssword</label>
                <input type="password" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" id = "confirmpassword" required value=""/>
            </div> -->
          <br>
          <div style="text-align: center;">
      
            <button class="button" type="submit" value="Register" name="Register" style="vertical-align:middle; font-family: 'Major Mono Display', monospace, cursive;font-size: 1rem; line-height: 1.6rem; text-align:center; background-color: #76B900; border-radius: 0.3rem; padding:0.7rem "><b>ReGisTer...</b></button>
          <!--<button type="submit">Submit</button>-->
          <br>
          <br>
          </div>
        </div>
        </form>
        <a style="color:white">AlReady HAve An Account ?<br>
        <a style="color:white" href="login.php">Login Here!</a>
        </a>
      </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>