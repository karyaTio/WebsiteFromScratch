<?php
	$nama_gambar = $_FILES['gambar']['name'];
  	$lokasi_gambar = $_FILES['gambar']['tmp_name'];
  	$tipe_gambar = $_FILES['gambar']['type'];
  	$tanggal = date('Ymd');
  	$isi = addslashes($_POST['isi']);
  
	if($lokasi_gambar=="") {
		$sql = "UPDATE tbl_article SET judul='$_POST[judul]', isi='$isi' WHERE id_article='$_POST[id]'";

		if($conn->query($sql) === TRUE){
    		echo "Record updated successfully NO IMAGE";
  		}else {
    		echo "Error : " . $sql . "<br>" . $conn->error;
  		}
	} else {
		$sql = "SELECT * FROM tbl_article WHERE id_article='$_POST[id]'";
		
		if($conn->query($sql) === TRUE){
    		echo "Record updated successfully";
  		}else {
    		echo "Error : " . $sql . "<br>" . $conn->error;
  		}
		
		if ($data['gambar'] != "") 
			unlink("../gambar/artikel/$data[gambar]");
			
		move_uploaded_file($lokasi_gambar, "../gambar/artikel/$nama_gambar");
		
		$sql = "UPDATE tbl_article SET judul = '$_POST[judul]', isi = '$isi', gambar = '$nama_gambar' WHERE id_article='$_POST[id]'";		
		
		if($conn->query($sql) === TRUE){
    		echo "Record updated successfully";
  		}else {
    		echo "Error : " . $sql . "<br>" . $conn->error;
  		}
	}
?>