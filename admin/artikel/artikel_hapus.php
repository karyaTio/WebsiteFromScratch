<?php
	$sql = "DELETE FROM tbl_article WHERE id_article='$_GET[id]'";
	if($conn->query($sql) === TRUE){
		echo "Record deleted successfully";
	}else {
		echo "Error : " . $sql . "<br>" . $conn->error;
	}
?>
