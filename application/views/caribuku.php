<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

  <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<table style="width:100%">

  
  <tr>
    <td>ISBN</td>
    <td>Judul Iklan</td> 
    <td>Judul Buku</td>
    <td>Penerbit</td>
    <td>Penulis</td>
    <td>Pemilik</td>
  </tr>
  <?php
    foreach ($buku as $key => $book) {
      ?>
  <tr>
    <td><?php echo $book['isbn'] ?></td>
    <td><?php echo $book['judul_iklan'] ?></td>
    <td><?php echo $book['judul_buku'] ?></td>
    <td><?php echo $book['penerbit'] ?></td>
    <td><?php echo $book['penulis'] ?></td>
    <td><?php echo $book['pemilik_buku'] ?></td>
  </tr>
   <?php } ?>
</table>

<?php echo $this->pagination->create_links(); ?>

</body>
</html>