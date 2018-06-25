<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="assets/css/main.css" >
	<script type="text/javascript" src="resource/js/jquery.min.js" ></script>
	<script type="text/javascript" src="resource/js/popper.min.js" ></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" >
	
	<script type="text/javascript" src="resource/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body style="margin: 0;">
	<?php 
		function IncludePage($pages = []){
			foreach ($pages as $page) {
				include "components/$page/index.html";
			}
		}
		include "components/header/header.html";
		include "pages/$_GET[page]/index.php";
		include "components/footer/footer.html";
	?>
</body>
</html>