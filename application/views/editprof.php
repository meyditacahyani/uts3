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
  <div class="w3-right">
  <span class="glyphicon glyphicon-user w3-bar-item w3-button w3-mobile username username-hide-mobile">Hello <?php echo $user_name; ?></span>
  <a href="<?php blink('Welcome')?>" class="glyphicon glyphicon-log-out w3-bar-item w3-button w3-mobile">Log Out</a>
  </div>
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
<h1 style="padding-bottom:1%; padding-left:1.3%" > Edit Profil </h1>

<form class="col-md-6" role="form" method="post" action="<?php echo base_url('user/editprofil'); ?>">

                          <fieldset>
                              
                              <div class="form-group">
                                  <input class="form-control" placeholder="Name" name="nama" id="nama" type="text" required autofocus>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Username" name="user_name"  id="user_name" type="text" value="<?php echo $user_name; ?>"  required autofocus>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="ID KTP" name="id_ktp" id="id_ktp" required type="text" value="">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Address" name="alamat" id="alamat" required type="text" value="">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Birth of Date" name="tgl_lahir" id="tgl_lahir" required type="Date" value="">
                              </div>
                             
                              <div class="form-group">
                                  <input class="form-control" placeholder="Mobile Number" name="user_mobile" id="user_mobile" required type="text" value="<?php echo $user_mobile;?>">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="age" name="age" id="age" required type="Number" value="">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Favorite Food" name="food" id="food" required type="text" value="">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Allergy" name="allergy" id="allergy" required type="text" value="">
                              </div>
                              <div class="form-actions">
                              <input class="btn btn-lg btn-success btn-block" type="submit">
                              </div>
                          </fieldset>
  </form>
</div>
<footer class="w3-container w3-dark-grey w3-padding-30 w3-margin-top">
  <p>Copyright &copy; Loneat Team 2018</p>
  <p>Universitas Budi Luhur</p>
</footer>

</body>
</html>
