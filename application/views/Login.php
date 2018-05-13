
<!-- Include the above in your HEAD tag -->

<title>LONEAT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php blink('assets/css/w3.css')?>">
<link href="<?php blink('assets/css/bootstrap.css')?>" rel="stylesheet" id="bootstrap-css">
<script src="<?php blink('assets/js/bootstrap.min.js')?>"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
  <a href="<?php blink('welcome')?>" class="w3-bar-item w3-button w3-mobile">Home</a>
  <a href="<?php blink('user/login_view')?>" class="w3-bar-item w3-button w3-mobile">Login</a>
</div>
<!-- start login form -->
<div class="w3-container " >
    <div class="w3-row " style="padding:3%;">
        
        <div class="col-sm-4" style="padding-top:5% background: rgb(0, 0, 0); background: rgba(0, 0, 0, 0.7); color: white; padding: 20px; margin: 0 auto; float: none;">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title w3-center" style="padding:3%;">Login</h3>
                </div>
                <?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');

                  if($success_msg){
                    ?>
                    <div class="alert alert-success">
                      <?php echo $success_msg; ?>
                    </div>
                  <?php
                  }
                  if($error_msg){
                    ?>
                    <div class="alert alert-danger">
                      <?php echo $error_msg; ?>
                    </div>
                    <?php
                  }
                  ?>

                <div class="panel-body">
                    <form role="form" method="post" action="<?php blink('user/login_user'); ?>">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="E-mail" name="user_email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="user_password" type="password" value="">
                            </div>


                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >

                        </fieldset>
                    </form>
                <center style="padding-bottom:2%;"><b>Not registered ?</b> <br></b><a href="<?php echo base_url('user'); ?>">Register here</a></center><!--for centered text-->

                </div>
            </div>
        </div>
    </div>
                </div>
    <!-- end login form -->


<footer class="w3-container w3-black w3-padding-30 w3-margin-top">
  <p>Copyright &copy; Loneat Team 2018</p>
  <p>Universitas Budi Luhur</p>
</footer>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119131810-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119131810-1');
</script>

</body>

</html>
