<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
body {
	/*background: #090a7c;*/
	background-image: url(../res/bg/bg.png);
	font-family:  'Aachen';
	color: 	#FFE4C4;
	text-align:center;
	max-height: 10px;
	
}
h1{
	font-family: 'Goudy Stout';
	
	font-weight: bold;
	/*text-shadow: 3px 5px 6px rgb(243, 178, 166);*/
	font-size: 2.5em;
	text-align: center;
	max-block-size: 30px;
}
	</style>

	<title>Header</title>
</head>

<body>
<h1>
	<?php 
		session_start();
		$_SESSION['user'] = '';
		$_SESSION['state'] = 'Login';
		$_SESSION['id'] = "1";
		$_SESSION['songList'] = NULL;
		echo "KHONGGIANAMNHAC";

	 ?>
</h1>
<h2>If you look deep enough you will see music; The heart of nature being everywhere music</h2>

</body>
</html>