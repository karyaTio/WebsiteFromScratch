<?php
  echo "I am visible";
  $nama_gambar = $_FILES['gambar']['name'];
  $lokasi_gambar = $_FILES['gambar']['tmp_name'];
  $tipe_gambar = $_FILES['gambar']['type'];
  $tanggal = date('Ymd');
  $isi = addslashes($_POST['isi']);

  $sql = "";

  if($lokasi_gambar=="") {
    $sql = "INSERT INTO artikel SET judul = '$_POST[judul]', isi = '$isi', tanggal = '$tanggal'"
  }else {
    move_uploaded_file($lokasi_gambar, "../gambar/artikel/$nama_gambar");
    $sql = "INSERT INTO artikel SET judul = '$_POST[judul]', isi = '$isi', tanggal = '$tanggal',gambar = '$nama_gambar'"
  }

  if($conn->query($sql) === TRUE){
    echo "New record created successfully";
  }else {
    echo "Error : " . $sql . "<br>" . $conn->error;
  }
?>
