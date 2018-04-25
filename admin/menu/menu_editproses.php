<?php
	$sql = "UPDATE tbl_menu SET judul='$_POST[judul]', link='$_POST[link]', urutan='$_POST[urutan]' WHERE id_menu='$_POST[id]'";
	if($conn->query($sql) === TRUE){
		echo "Record updated successfully";
	}else {
		echo "Error : " . $sql . "<br>" . $conn->error;
	}
?>
