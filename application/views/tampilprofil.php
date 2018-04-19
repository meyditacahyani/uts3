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
    <a href="<?php blink('Welcome/tampilprofil')?>" class="w3-bar-item w3-button w3-mobile">Profile</a>
  <a href="<?php blink('Welcome')?>" class="w3-bar-item w3-button w3-mobile">Log Out</a>
</div>


  <head>
    <meta charset="utf-8">
    <title>MY PROFILE</title>
    <link href="<?php blink ('assets/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?php blink ('assets/css/bootstrap.css')?>" rel="stylesheet">
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  </head>
  <body style="background-color : white;">
    <div class="container-fluid" style="z-index:-1;">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <div class="panel panel-info">
            <div class="panel-heading"><span class="glyphicon glyphicon-user" style="font-size:12px; color:Green"></span></div>
              <div class="card card-body">
                <div class="panel-body">
					<h2>My Profile</h2>
                  <table class="table">
                    <thead>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Name</td>
                        <td>Adiiba Dwikanthi</td>
						<td align="center" rowspan="12"><img src="<?php blink('images/fotodiba.jpg')?>" height="40%" class="img-rounded" alt="Cinque Terre">
        				        </td>
                      </tr>
                      <tr>
                        <td>Username</td>
                        <td>ddwikanthi</td>
                      </tr>
                      <tr>
                        <td>Birth of Date</td>
                        <td>19-01-1997</td>
                      </tr>
                      <tr>
                        <td>Age</td>
                        <td>21</td>
                      </tr>
                      <tr>
                        <td>Favorite Food</td>
                        <td>Cilor (Aci Telor)</td>
                      </tr>
                      <tr>
                        <td>Allergy</td>
                        <td>Ex-Boyfriend</td>
                      </tr>
                      <tr>
                        <td>Address</td>
                        <td>Cipadu Street</td>
                      </tr>
                      <tr>
                        <td>Nomor Telepon</td>
                        <td>08xxxxxxxx</td>
                      </tr>
                    </tbody>
                  </table>
				   <a href="<?php blink('Welcome/editprofil')?>" class="btn btn-primary btn-md">Edit Profile</a>
                </div>
              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
  </body>
  <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">

  <p>Ini Footer</p>
</footer>
</html>
