<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Stock Barang</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Tambahkan link untuk ikon Font Awesome -->
<style>
body {
    font-family: Arial, sans-serif;
    margin: 150px;
    padding: 0;
    background-image: url('ukk.jpg'); 
    background-size: cover;
    background-position: center; 
    background-repeat: no-repeat;
}

h2 {
    text-align: center;
    color: white;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 50.50);
    font-size: 35px;
  }

button {
    background-color: red;
    color: white;
    border: none;
    padding: 10px 20px;
    margin-bottom: 10px;
    border-radius: 5px;
    cursor: pointer;
    border-radius: 20px;
}

button:hover{
    background-color: #8B0000;
}

table {
    width: 100%;
    border-radius: 20px;

}
table, th, td {
    border: 1px solid #ddd;
    background-color: white;
    background-color: rgba(255, 255, 255, 0.6);
    box-shadow: 0 2px 5px rgba(0, 0, 50, 0.50);
}

td {
    padding: 10px;
    text-align: center;
    border-radius: 20px;
}

th {
    padding: 10px;
    text-align: center;
    background-color: blue;
    color: white;
    border-radius: 20px;
}

td a {
    color: #4CAF50;
    text-decoration: none;
}

td a:hover {
    text-decoration: underline;
}

button.tambah-produk {
    margin-left: 1181px;
    background-color: #28a745;
}

button.tambah-produk:hover {
    background-color: #218838;
}

</style>
</head>
<body>

<h2>STOCK BARANG</h2>
<button onclick="location.href='dashboard.php'"><i class="fas fa-arrow-left"></i> KEMBALI KE DASHBOARD</button>
<button class="tambah-produk" onclick="location.href='tambah_produk.php'"><i class="fas fa-plus"></i> TAMBAH PRODUK BARU</button>

<table border="1">
  <tr>
    <th>NO</th>
    <th>NAMA PRODUK</th>
    <th>HARGA</th>
    <th>STOCK</th>
    <th>AKSI</th>
  </tr>
  
  <?php
session_start();
include 'config.php';
   $sql = "SELECT ProdukID, NamaProduk, Harga, Stok FROM produk";
   $result = mysqli_query($conn, $sql);
 
   if (mysqli_num_rows($result) > 0) {
       while ($row = mysqli_fetch_assoc($result)) {
           echo "<tr>";
           echo "<td>" . $row["ProdukID"] . "</td>";
           echo "<td>" . $row["NamaProduk"] . "</td>";
           echo "<td>" . $row["Harga"] . "</td>";
           echo "<td>" . $row["Stok"] . "</td>";
           echo "<td>";
           echo "<a href='edit_produk.php?id=" . $row["ProdukID"] . "' title='Edit'><i style='color:red' class='fas fa-edit'></i></a>&nbsp;|&nbsp;";
           echo "<a href='hapus_produk.php?id=" . $row["ProdukID"] . "' title='Hapus'><i style='color:red' class='fas fa-trash-alt'></i></a>";
           echo "</td>";
           echo "</tr>";
       }
   } else {
       echo "<tr><td colspan='5'>0 hasil</td></tr>";
   }
 
   mysqli_close($conn);
   ?>
 </table>

</body>
</html>
