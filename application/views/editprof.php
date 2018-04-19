<!DOCTYPE html>
<!------ Include the above in your HEAD tag ---------->

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php blink('assets/css/w3.css')?>">
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
  .active {
    background-color: #c2d6d6;
	color: #486a6a;
}
</style>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
<h1><b>LONEAT</b></h1>
  <p>Wanna Eat Together?</p>
</header>

<!-- navigation bar -->
<div class="w3-bar w3-black">
<a href="<?php blink('Welcome/after')?>" class="w3-bar-item w3-button w3-mobile">Home</a>
  <a href="<?php blink('Welcome/tampilprofil')?>" class="w3-bar-item w3-button w3-mobile">Profil</a>
  <a href="<?php blink('Welcome/tampilnotif')?>" class="w3-bar-item w3-button w3-mobile">Notification</a>
    <a href="<?php blink('Welcome')?>" class="w3-bar-item w3-button w3-mobile">Log Out</a>
</div>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php blink('assets/css/bootstrap.css') ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php blink('assets/js/bootstrap.js') ?>"></script>
</head>
<body>
<div class="container" style="padding-top:5%" >
<h1 style="padding-bottom:1%; padding-left:1.3%" > Profil </h1>
    <form class="col-md-6">
    <div class="form-group">
      <input type="text" placeholder="Name" class="form-control" id="nama">
    </div>
    <div class="form-group">
      <input type="text" placeholder="Username" class="form-control" id="uname">
    </div>
    <div class="form-group">
      <input type="text" placeholder="Email"class="form-control" id="email">
    </div>
    <div class="form-group">
      <input type="text" placeholder="Phone Number" class="form-control" id="nohp">
    </div>
    <div class="form-group">
      <input type="text" placeholder="ID KTP" class="form-control" id="ktp">
    </div>
    <div class="form-group">
      <input type="text" placeholder="Address" class="form-control" id="alamat">
    </div>
    <div class="form-group">
      <input type="text" placeholder="Birth of Date" class="form-control" id="bod">
    </div>
    <div class="form-group">
      <input type="text" placeholder="Age" class="form-control" id="age">
    </div>
    <div class="form-group">
      <input type="text" placeholder="Favorite Food" class="form-control" id="ff">
    </div>
    <div class="form-group">
      <input type="text" placeholder="Allergy" class="form-control" id="aler">
    </div>
  </form>
  <div style="padding-left:1.3%">
  <button method="post" class="btn btn-primary btn-md" href="<?php blink('Welcome/editprofil') ?>"> SIMPAN </button>
  <button method="post" class="btn btn-warning btn-md" href="<?php blink('Welcome/editprofil') ?>"> BATAL </button>
  </div>
</div>
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
  
  <p>Ini Footer</p>
</footer>

</body>
</html>
