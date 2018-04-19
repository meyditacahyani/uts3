<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php blink('assets/css/w3.css') ?>">
<title>Loneat</title>
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
</style>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>LONEAT</b></h1>
  <p>Wanna Eat Together</p>
</header>

<!-- navigation bar -->
<div class="w3-bar w3-black">
  <a href="<?php blink('Welcome/index')?>" class="w3-bar-item w3-button w3-mobile">Home</a>
  <a href="<?php blink('Welcome/login')?>" class="w3-bar-item w3-button w3-mobile">Login</a>
</div>

<link href="<?php blink('assets/css/bootstrap.css') ?>" rel="stylesheet" type="text/css">
<script href="<?php blink('assets/js/bootstrap.js') ?>" rel="stylesheet" type="text/javascript"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container" style="padding-top: 5%;">
            <form action="<?php echo base_url(). 'Regist/tambah_aksi'; ?>" method="post" class="form-horizontal" role="form">
                <h2>Registration Form</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" name="username" id="firstName" placeholder="Username" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="number" class="col-sm-3 control-label">Phone Number</label>
                    <div class="col-sm-9">
                        <input type="text" name="phone" id="number" placeholder="085xxx" class="form-control">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" id="password" placeholder="xxx" class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->