<?php
	$expiration = '2023-11-02 09:30:00';
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="robots" content="noindex, nofollow">
	<title>數位翻轉、加速轉型</title>
	<meta name="description" content="誠摯歡迎您前來參與資通電腦 2023 用戶大會。">
	<link rel="shortcut icon" href="_assets/img/favicon.ico">
	<link rel="stylesheet" href="_assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="_assets/css/bootstrapValidator.min.css">
	<link rel="stylesheet" href="_assets/css/main.css">
	<link rel="stylesheet" href="home/home.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<style>
*{font-display:swap;}
header{margin-top:0;}
#nav{position:static!important;}
#nav ul{position:static!important;width: auto!important;}
footer{line-height:1.5;height:auto;}
figure a:hover,figure a:focus, footer a:hover,footer a:focus,#join a:hover,#join a:focus{color:#fff;text-decoration: none;}
</style>
<body>
<noscript>
	<p class="text-danger">必須啟用 JavaScript，才能檢視此網頁。然而，JavaScript 似乎已經停用或未獲瀏覽器支援。</p>
	<p class="text-danger">請變更您的瀏覽器選項以啟用 JavaScript，然後<a href="./">再試一次</a>。</p>
</noscript>

<!--[if gt IE 7]><!-->
<!-- <div class="fbbox">
	<div>
		<iframe src="//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/AresInternational&width=292&height=290&colorscheme=light&show_faces=true&header=true&stream=false&show_border=true" scrolling="no" frameborder="0" style="border:none;overflow:hidden;width:292px;height:290px;background-color:#fff;" allowTransparency="true">
		</iframe>
	</div>
</div> -->
<!--<![endif]-->
<!-- <div id="nav">
	<nav class="flex-box space-between cont">
		<a title="資通電腦官網" href="https://www.ares.com.tw/" rel="external"><img src="../img/ARES-Logo.png" alt="資通電腦 logo" class="img-responsive logo"></a>
		<ul class="flex-box flex-vc-end">
			<li class="act"><a href="../">活動首頁</a></li>
		</ul>
	</nav>
</div> -->
<div id="all">
	<!-- <header style="background-color: #FFD47F;">
		<a href="http://edm.ares.com.tw/dm/user-conference-2015/" target="_blank">
			<img src="_assets/img/logo.png" alt="">
			<img class="img-responsive" src="../img/banner.jpg" alt="">
		</a>
	</header> -->
	<header id="home">
		<img style="max-width: 100%;" loading="lazy" width="" height="" src="https://edm.ares.com.tw/dm/2023-user-conference/img/banner.png" alt="*">
	</header>

	<form id="signup" class="form-horizontal cont" action="home/process.php" method="post" novalidate>
				<h2 class="text-center">線上報名</h2>
		<?php

			$today = date('Y-m-d H:i:s');
			$compare = strtotime($expiration) - strtotime($today);
			if ($compare < 0) {
				echo '<p class="text-center">報名已經截止，敬請見諒。</p>';
				echo '<p class="text-center">謝謝您的支持！</p>';
			} else {
				include 'home/form.html';
			}
		?>
	</form>
	<br><br>
	<div class="flearfix"></div>
	<footer class="main-bg fff-color container-fluid text-center p-3">
		<div class="cont">
			<small>&copy; 2023 資通電腦(股)公司</small>
		</div>
	</footer>
</div> <!-- wrap -->
<script>
document.addEventListener('DOMContentLoaded', function(){ 
	if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		var target = document.getElementById('signup');
		window.scrollTo(0, target.offsetTop);
	}
}, false);
</script>
<script src="_assets/js/jquery-1.11.1.min.js"></script>
<script src="_assets/js/bootstrap.min.js"></script>
<script src="_assets/js/bootstrapValidator.min.js"></script>
<script src="_assets/js/ajax-loader.js"></script>
<script src="home/home.js?3"></script>
</body>
</html>
