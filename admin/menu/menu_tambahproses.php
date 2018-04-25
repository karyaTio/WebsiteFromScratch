<?php
	$sql = "INSERT INTO tbl_menu set judul = '$_POST[judul]', link = '$_POST[link]', urutan = '$_POST[urutan]'";
	if($conn->query($sql) === TRUE){
		echo "New record created successfully";
	}else {
		echo "Error : " . $sql . "<br>" . $conn->error;
	}
?>
