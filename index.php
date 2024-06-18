
<!DOCTYPE html>
<html>
<head>
<title>Event4U||Home Page</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<!---->
<?php include_once('includes/header.php');?>
<!---->
<script src="js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
        manualControls: '#slider3-pager',
      });
    });
  </script> 
<div class="content">
	 <div class="container">  
		  <div class="slider">
			<!-- Slideshow 3 -->
			<ul class="rslides" id="slider">
			  <li><img src="images/wedding3.jpg" alt="">
				<div class="caption">
					<h1>Wedding Event </h1>
					<p></p>
				</div>
			  </li>
			  <li><img src="images/Ring.jpg" alt="">
				<div class="caption">
					<h1>Engagement ceremony</h1>	  
					<p></p>
				</div>
			  </li>	      
			  <li><img src="images/Birth.jpg" alt="">
				<div class="caption">
					<h1>Birthday party</h1>	  
					<p>.</p>
				</div>
			  </li>
			  <li><img src="images/Baby.jpg" alt="">
				<div class="caption">
					<h1>Baby shower</h1>
					<p></p>
				</div>
			  </li>
			  <li><img src="images/get.jpg" alt="">
				<div class="caption">
					<h1>Get Together</h1>	  
					<p></p>
				</div>
			  </li>	      
			  <li><img src="images/work.jpg" alt="">
				<div class="caption">
					<h1>Workshop</h1>	  
					<p></p>
				</div>
			  </li>
			  <li><img src="images/dance2.jpg" alt="">
				<div class="caption">
					<h1>School & Collage Events</h1>	  
					<p></p>
				</div>
			  </li>	      
			  <li><img src="images/3.jpg" alt="">
				<div class="caption">
					<h1>Concerts</h1>	  
					<p></p>
				</div>
			  </li>
			</ul>
			<!-- Slideshow 3 Pager --></br></br>
			<ul id="slider3-pager">
			  <li><a href="#"><img src="images/wedding3.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/Ring.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/Birth.jpg" alt=""></a></li>
			   <li><a href="#"><img src="images/Baby.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/get.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/work.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/dance2.jpg" alt=""></a></li>
			  <li><a href="#"><img src="images/33.jpg" alt=""></a></li>
			</ul>   
				<div class="clearfix"></div>
		  </div>
	 </div>
	<?php include_once('includes/footer.php');?>
</div>
<!---->

<!---->
</body>
</html>