<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php blink('assets/css/w3.css')?>">

<link rel="stylesheet" href="<?php blink('assets/css/bootstrap-min.css')?>">
<script src="<?php blink('assets/js/jquery-min.js')?>"></script>
<script src="<?php blink('assets/js/bootstrap-min.js')?>"></script>
<style>
@font-face {
    font-family: 'Raleway';
    font-style: normal;
    font-weight: 400;
    src: local('Raleway'), local('Raleway-Regular'), url(https://fonts.gstatic.com/s/raleway/v12/1Ptug8zYS_SKggPNyCMIT5lu.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }
  /* latin */
  @font-face {
    font-family: 'Raleway';
    font-style: normal;
    font-weight: 400;
    src: local('Raleway'), local('Raleway-Regular'), url(https://fonts.gstatic.com/s/raleway/v12/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
  .full-width {
  width: 100vw;
  position: relative;
  left: 50%;
  right: 50%;
  margin-left: -50vw;
  margin-right: -50vw;
}
.centered {
    position: absolute;
    background: rgb(0, 0, 0); /* fallback color */
    background: rgba(0, 0, 0, 0.7);
    color: white;
    padding: 20px;
    top: 50%;
    left: 50%;
    transform: translate(-50%);
}

</style>
<body class="w3-light-grey">
<link rel="stylesheet" href="<?php blink('assets/css/bootstrap.css')?>">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>LONEAT</b></h1>
  <p>Wanna Eat Together?</p>
</header>

<!-- navigation bar -->
<div class="w3-bar w3-black" style="margin-bottom:2%;">
  <a href="<?php blink('Welcome/after')?>" class="w3-bar-item w3-button w3-mobile">Home</a>
  <a href="<?php blink('Welcome/tampilprofil')?>" class="w3-bar-item w3-button w3-mobile">Profil</a>
  <a href="<?php blink('Welcome/tampilnotif')?>" class="w3-bar-item w3-button w3-mobile">Notification</a>
  <div class="w3-right">
  <span class="glyphicon glyphicon-user w3-bar-item w3-button w3-mobile username username-hide-mobile">Hello <?php echo $user_name; ?></span>
  <a href="<?php blink('Welcome')?>" class="glyphicon glyphicon-log-out w3-bar-item w3-button w3-mobile">Log Out</a>
  </div>
</div>
    
	<div class="w3-container" style="padding-bottom:5%;">
<div class="col-md-6">
    <h4>Gugum Gumilar</h4>
    <p>I accept your offer to eat together with you. You can call me at 08978768789</p>
    <div>
<span class="badge">Posted 2018-04-17 10:47:04</span>
     </div>
	 </div>
	 </div>
	 
	 <div class="w3-container" style="padding-bottom:5%;">
<div class="col-md-6">
    <h4>Rivaldi Pratama</h4>
    <p>I accept your offer to eat together with you. You can call me at 0897454534</p>
    <div>
<span class="badge">Posted 2018-04-17 09:47:04</span>
     </div>
	 </div>
	 </div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-30 w3-margin-top">
  <p>Copyright &copy; Loneat Team 2018</p>
  <p>Universitas Budi Luhur</p>
</footer>

</body>
</html>
