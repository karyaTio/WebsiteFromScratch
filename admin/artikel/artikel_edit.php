<?php
	$sql = "SELECT * FROM tbl_article WHERE id_article='$_GET[id]'";
	$result = $conn->query($sql);

	if($result->num_rows > 0) {
    	echo "Data not null";
  	}

  $data = $result->fetch_assoc();
?>

<h2>Edit Artikel</h2>
<form name="edit" method="post" action="?tampil=artikel_editproses" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $data['id_article']; ?>">
    <table>
        <tr>
        	<td>Judul Artikel</td>
        	<td><input type="text" name="judul" size="50" value="<?php echo $data['judul']; ?>"></td>
        </tr>
        <tr>
        	<td>Gambar</td>
        	<td><img src="../gambar/artikel/<?php echo $data['gambar']; ?>" width="100"> <br>
            <input type="file" name="gambar"></td>
        </tr>
        <tr>
        	<td>Isi Artikel</td>
        	<td><textarea name="isi" cols="80" rows="15"> <?php echo $data['isi']; ?></textarea></td>
        </tr>
        <tr>
        	<td></td>
        	<td><input type="submit" name="edit" value="Edit"></td>
        </tr>
    </table>
</form>