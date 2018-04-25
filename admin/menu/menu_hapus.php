<?php
	$sql = "DELETE FROM tbl_menu WHERE id_menu='$_GET[id]'";
	if($conn->query($sql) === TRUE){
		echo "Record deleted successfully";
	}else {
		echo "Error : " . $sql . "<br>" . $conn->error;
	}
?>
