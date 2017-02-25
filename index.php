<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="icon" href="images/icon.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<style type="text/css">
	body{
		  background-color: #222;
	    overflow: hidden;
	    -webkit-user-select: none;
	       -moz-user-select: none;
	         -o-user-select: none;
	        -ms-user-select: none;
	            user-select: none;
	}
	.center-bg{
		position: absolute;
		z-index: 1;
		 left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
}
	}
	.nav-custom{
		margin-left: 3rem;
	}
	.logo-custom{
		margin-left: 3rem;
	}
	.slide-link-custom{
		margin-top: 1.5rem;
	}
	canvas {
    position: absolute;
    top: 0;
    left: 0;
}
.color-custom{
	background-color: rgba(73, 138, 138, 0.7); 
}
.nav-con{
	height: 10vh;
	width: 100vw;
	position: absolute;
	z-index: 1;
}
.flex-con{
	display: flex;
	width: 100%;
	height: 100%;
}
.navy-menu{
	height: 100%;
	width: 30%;
	display: flex;
}
.navy-logo{
	height: 100%;
	width: 40%;
	display: flex;
}
.navy-add{
	width: 30%;
	height: 100%;
}
.navy-logo{
	display: flex;
	justify-content: center;
}
.img-con{
	display: flex;
	align-items: center;

}
.menu-holder{
	height: 100%;
	width: 70%;
	display: flex;
	justify-content: space-around;
	align-items: center;
}
h4, span{
	color: white;
}
.logs{
	transform: translate(0,2rem);
}
</style>
<body>
<!-- navi -->
  <!-- <div class="navbar-fixed ">
    <nav>
      <div class="nav-wrapper color-custom">
        <a href="#!" class="brand-logo center black-text">gitna</a>
        <ul class="left hide-on-med-and-down nav-custom">
          <li><a href="#" class="waves-effect waves-light black-text">HTML</a></li>
          <li><a href="#" class="waves-effect waves-light black-text">CSS</a></li>
          <li><a href="#" class="waves-effect waves-light black-text">PHP</a></li>
        </ul>
         <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>
  </div> -->
  <div class="nav-con">
  	<div class="flex-con">
  		<div class="navy-menu">
	  		<div class="menu-holder">
	  		 <a href="#" data-activates="slide-out" class="hide-on-med-and-up button-collapse"><i class="material-icons">menu</i></a>
	  			<a href="#" class="waves-effect waves-light black-text hide-on-small-only white-text">HTML</a>
	    	  <a href="#" class="waves-effect waves-light black-text hide-on-small-only white-text">CSS</a>
	          <a href="#" class="waves-effect waves-light black-text hide-on-small-only white-text">PHP</a>
	  		</div>
  		</div>
  		<div class="navy-logo">
  			<div class="img-con">
  			<img src="images/logo-img.png" class="hide-on-small-only logs">
  			</div>
  		</div>
  		<div class="navy-add">
  		
  		</div>
  	</div>
  </div>
   <ul class="side-nav" id="slide-out">
         <li><a href="#" class="waves-effect waves-light black-text slide-link-custom">HTML</a></li>
          <li><a href="#" class="waves-effect waves-light black-text">CSS</a></li>
          <li><a href="#" class="waves-effect waves-light black-text">PHP</a></li>
      </ul>  
<!-- body -->

	<div class="center-bg ">
	
		<h4 class="flow-text">Welcome to our web tutorial</h4>
		<center><span>Learn from us.</span></center>
		
	</div>
	<canvas id="c"></canvas>

	

<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
<script type="text/javascript">
	
    $(".button-collapse").sideNav();

</script>
<script type="text/javascript" src='js/gravity.js'></script>
</body>
</html>