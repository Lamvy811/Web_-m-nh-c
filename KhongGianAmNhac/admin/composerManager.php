<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h1>Nhạc Sĩ</h1>
	<form>
		<table>
			<thead>
				<tr>
					<td>Email Nhạc Sĩ</td>
					<td>Tên Nhạc Sĩ</td>
					<td>Ngày Sinh</td>
					<td>Địa Chỉ</td>
					<td>Hình Ảnh</td>
					<?php 
						$title = array("Email", "NameComposer", "Birthday", "Address", "ImageComposer");
						$titleName = array("Email Composer", "Name Composer", "Birthday", "Address", "Image Composer");
						$_SESSION['type'] = "3";
					 ?>
				</tr>
			</thead>
			<tbody>
				<?php 
					$composerList = $_SESSION['composerList'];
					foreach($composerList as $d){
				 ?>
				 <tr>
				 	<?php 
				 		foreach($d as $s){
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