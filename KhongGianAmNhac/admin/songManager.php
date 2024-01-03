<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h1>Bài Hát</h1>
	<form>
		<table>
			<thead>
				<tr>
					<td>Id Bài Hát</td>
					<td>Tên Bài Hát</td>
					<td>Email Ca Sĩ</td>
					<td>Email Nhạc Sĩ</td>
					<td>Thời gian phát hành</td>
					<td>Mã Bài Hát</td>
					<td>Lượt Thích</td>
					<td>Lượt Bình Luận</td>
					<td>Lượt Tải Về</td>
					<td>Tên Ca Sĩ</td>
					<td>Tên Nhạc Sĩ</td>
					<?php 
						$title = array("IdSong", "NameSong", "EmailSinger", "EmailComposer", "ReleaseTime", "SrcSong");
						$titleName = array("Id Song", "Name Song", "Email Singer", "Email Composer", "Release Time", "Source Song");
						$_SESSION['type'] = "1";
					 ?>
				</tr>
			</thead>
			<tbody>
				<?php 
					$songList = $_SESSION['songList'];
					foreach($songList as $song){
				 ?>
				 <tr>
				 	<?php 
				 		foreach($song as $s){
				 	 ?>
				 	<td><?php echo $s ?></td>
				 	<?php 
				 		}
				 	 ?>
				 </tr>
				 <?php 
				 	}
				  ?>
			</tbody>
		</table>
	</form>
</body>
</html>