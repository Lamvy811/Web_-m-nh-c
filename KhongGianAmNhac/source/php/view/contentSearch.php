<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	body
	{
	background-image: url(../res/bg/bg.png);
	background-repeat: repeat-y;
	margin: 3em 4em;
	font-family: "Arial, Times New Roman";
	padding: 0;
	}

	.container{
	}
	.container .taskbar{
	height: 3.5em;
	background:#FFE4C4;
	position: fixed;
	left: 0em;
	right: 0em;
	top: 0;
	z-index:1;
	}

	.container .taskbar img{
	width:auto;
	left: 300%;	
	}

	.container .taskbar .textSearch{
	background: transparent;
	position: absolute;
	right: 3%;
	height: 8%;
	width: 30%;
	top: 0%;
	font-size: 1.5em;
	padding: 1em;
	padding-left: 3em;
	border: solid;
	border-radius: 1em;
	}

	.container .taskbar .btnSearch{
	position: absolute;
	right: 5%;
	top: 25%;
	height: 50%;
	background:	#FFE4C4;
	border: none;
	border-radius: 1em;
	}

	.container .taskbar .user{
	position: absolute;
	top: 5%;
	height: 80%;
	width: auto;
	left:5%;
	}

	.container .taskbar .name{
	position: absolute;
	top: 30%;
	height: 80%;
	width: auto;
	left: 8%;
	font-size: 1.5em;
	}

	.container .content{
	/*background: yellow;*/
	position: relative;
	}

	.container .content form table{
	flex:20%;
	margin:auto;
	width: 100%;
	position: absolute;
	}

	.container .content form table tr{
	display: flex;
    margin:auto;
    flex-flow: row wrap;
    flex-wrap: wrap;
    justify-content: space-around;
	}

	.container .content form table tr td{
	background: white;
	transition: 0.3s;
	width: 30%;
	border-radius: 10px;
	position: relative;
	/* padding-bottom: 20px; */
	margin-bottom: 20px;
	margin-top: 20px;
	}

	.container .content form table tr td .songBox{
		margin: auto;
		width: auto;
		height: 25em;
		position: relative;
	}

	.container .content form table tr td .songBox .avatar{
		width: 100%;
		height: 70%;
		border-radius: 10px;

	}

	/*.container .content form table tr td .songBox .icon{
		width: auto;
		height: 2em;
		position: absolute;
		left: 0.5em;
	}*/

	.container .content form table tr td .songBox h1{
		position: absolute;
		bottom: 20px;
		right: 20px;
	}

	.container .content form table tr td .songBox h3{
		position: absolute;
		bottom: 5px;
		right: 20px;
	}

	.container .content form table tr td .songBox h1:hover{
		color: white;
	}

	.container .content form table tr td .songBox h3:hover{
		color: white;
	}

	.container .play{
		text-align: center;
		background: trasparent;
		height: 4em;
		position: fixed;
		bottom: -1em;
		right: 2em;
		left: 2em;
		z-index: 1;
	}

	.container .play audio{
		width: 80%;
	}
	</style>
</head>

<body>
	<?php 
		session_start();
		include($_SERVER['DOCUMENT_ROOT']."/KhongGianAmNhac/source/php/model/bo/searchHandle.php");
		$titleSong = array("nameSong", "nameSinger", "nameComposer", "imageSinger", "srcSong", "numLike", "numComment", "numDownload");
		foreach($songList as $row){
			echo $row['nameSinger'];
		}
	 ?>
	<div class="container">
		<form action="../model/bo/searchHandle.php" method="post">
			<div class="taskbar">
			<!--<a href="./content.php"><img src="../../../res/icon/logo03.png" title="Home" class="logo"></a>-->
			<input type="text" name="txtSearch" placeholder="Tìm Kiếm ..." class="textSearch" required>
			<input type="submit" name="btnSearch" class="btnSearch" value="Search">
			<a href="./login.php"><img src="../../../res/icon/user.png" class="user" 
				title="<?php echo $_SESSION['state'] ?>"></a>
			<label class="name"><?php echo $_SESSION['user'] ?></label>
		</div>
		</form>
		<div class="content">
			<form method="POST">
				<table>
					<?php 
						$row = 0;
					 ?>
					 <tr>
					 	<?php 
					 		foreach($songList as $data){
					 	 ?>
					 		<td>
					 			<div class="songBox">
								 <img title="<?php echo "Download: ".$data['numDownload'] ?>" src="../../../res/icon/download.png" class="icon download">
					 				<img src="<?php echo "../../../res/singer/".$data['imageSinger'] ?>" class="avatar">
					 				<a href="./content.php?bh=<?php echo $data['srcSong'] ?>" class="showAudio">
					 					<h1 title="<?php echo $data['nameComposer'] ?>"><?php echo $data['nameSong'] ?></h1>
					 				</a>
					 				<h3><?php echo $data['nameSinger'] ?></h3>
					 			</div>
					 		</td>
					 		<?php 
					 			if(++$row == 3){
					 				$row = 0;
					 		 ?>
					 		 	</tr>
					 		 	<tr>
					 		 <?php 
					 		 	}
					 		  ?>
					 	<?php 
					 		}
					 	 ?>
					 </tr>
				</table>
				
			</form>
			<form class="play">
				<audio controls autoplay>
    				<source src="<?php echo "../../../res/audio/".$_GET['bh'].".mp3" ?>" type="audio/ogg">
				</audio>
			</form>
		</div>
	</div>
</body>
</html>