<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php blink('assets/css/w3.css')?>">
<link rel="stylesheet" href="<?php blink('assets/css/bootstrap.css')?>">
<link rel="stylesheet" href="<?php blink('assets/css/bootstrap-min.css')?>">

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
<body>

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
  <a href="<?php blink('welcome/after')?>" class="w3-bar-item w3-button w3-mobile">Home</a>
  <a href="<?php blink('welcome/tampilprofil')?>" class="w3-bar-item w3-button w3-mobile">Profil</a>
  <a href="<?php blink('welcome/tampilnotif')?>" class="w3-bar-item w3-button w3-mobile">Notification</a>
  
  <div class="w3-right">
  <span class="glyphicon glyphicon-user w3-bar-item w3-button w3-mobile username username-hide-mobile">Hello <?php echo $user_name; ?></span>
  <a href="<?php blink('welcome')?>" class="glyphicon glyphicon-log-out w3-bar-item w3-button w3-mobile">Log Out</a>
  </div>
</div>
    
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">    

<div class="w3-margin-top w3-container w3-padding-32" style="background: rgb(0, 0, 0); background: rgba(0, 0, 0, 0.7); color: white;
padding: 20px;">
			<?php
			$success_msg= $this->session->flashdata('success_msg');
			if($success_msg){
				?>
				<div class="alert alert-success">
				<?php echo $success_msg; ?>
				</div>
				<?php
			}
			?>
            
            <?php
              $dt = new DateTime();
            ?>

            <form class="form-horizontal" role="Inserform" method="post" action="<?php echo base_url('user/update_status'); ?>">
                <h4>Status</h4>
	<div class="row">
    
		          <div class="col-md-6">

      <div class="panel panel-default">
	  <div class="form-group">
		<input class="form-control" type="hidden" value="">
	</div>
        <input type="hidden" class="form-control" name="date" id="date" value="<?php echo $dt->format('Y-m-d H:i:s'); ?>" >
        <input type="hidden" class="form-control" name="user_id" id="user_id" value="<?php echo $user_id; ?>" >
				<input type="hidden" class="form-control" name="user_name" id="user_name" value="<?php echo $user_name; ?>" >
              <div class="form-group">
                <textarea type="text" class="form-control" name="status" required id="status" rows="3" placeholder="What's on your mind?"></textarea>
              </div>	
                <div class="panel-footer"> 
                  <div class="pull-right">
                    <button type="submit" class="btn btn-success" >Post</button>
                  </div>  
                </div>
            </div>
          </div>
          </div>
<!-- content -->

<table class="table table-hover">
                              <?php if(isset($tampilstatus)){?>
                                                         <tbody>
                                                         	 <?php $x = 1; ?>
                                                         	 <?php foreach($tampilstatus as $data){ ?>
                                                                <div class="w3-container w3-padding-32" style="padding-bottom:5%; width:100%">
																<div class="col-md-12">
																	<h4><?php echo $data->user_name;?></h4>
																	<p><?php echo $data->status;?></p>
																	<div>
																<span class="badge">Posted <?php echo $data->date;?></span><div class="pull-right">
																<?php if($data->user_name != $user_name ) {?>
                                  <a href="<?php blink('user/acc/'.$data->status_id.'')?>" class="btn btn-success">Accept </a>
                          
																<?php } else {?>
																<a href="<?php blink('user/deletestatus/'.$data->status_id.'')?>" class="btn btn-danger">Delete</a>
																<?php } ?>
																</div>         
																	 </div>
																	 </div>
																   </div>
                                                             <?php $x = $x+1; ?>
                                                         </tbody>
														 <?php } }?>
</table>


</div><!--end of content-->

<script src="<?php blink('assets/js/jquery-min.js')?>" type="text/javascript"></script>
<script src="<?php blink('assets/js/bootstrap-min.js')?>" type="text/javascript"></script>

<!-- Footer -->
<footer class="w3-container w3-padding-30 w3-margin-top" style="background: rgb(0, 0, 0); background: rgba(0, 0, 0); color: white;">
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
