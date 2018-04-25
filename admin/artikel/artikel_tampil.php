<h2>Data Artikel</h2>
<a href="?tampil=artikel_tambah">Tambah Artikel</a><br><br>
<table width="100%" cellspacing="0" class="data"border="1">
  <tr>
  <th>No</th>
  <th>Judul Artikel</th>
  <th>Tanggal</th>
  <th>Aksi</th>
  </tr>
<?php
  $no=1;
  $sql = "SELECT * FROM tbl_article ORDER BY id_article DESC";

  $result = $conn->query($sql);

  while($data = $result->fetch_assoc()) {
?>
  <tr>
  <td><?php echo $no; ?> </td>
  <td><?php echo $data['judul']; ?></td>
  <td><?php echo $data['tanggal']; ?></td>
  <td>
  <a href="?tampil=artikel_edit&id=<?php echo $data['id_artikel']; ?>"> Edit </a> |
  <a href="?tampil=artikel_hapus&id=<?php echo $data['id_artikel']; ?>"> Hapus </a>
  </td>
  </tr>
<?php
  $no++;
  }
?>
</table>
