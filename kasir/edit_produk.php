<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Produk</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-gn8cHtUGuVJdZ3C8iK6NtHjL5x99NhN28Lv/KyviHZfVklvQDQTXTQpYjgVi/v+71b00NUarDT8F8z1mGBJj3w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    body {
    font-family: helvetica;
    margin: 0;
    padding: 20px;
    background-image: url('ukk.jpg'); 
    background-size: cover;
    background-position: center; 
    background-repeat: no-repeat;
}

h2 {
  text-align: center;
  color: blue;
}

form {
  max-width: 400px;
  margin: 0 auto;
  background-color: rgba(255, 255, 255, 0.8);
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-bottom: 8px;
  color: #333;
}

input {
  width: 100%;
  padding: 8px;
  margin-bottom: 16px;
  box-sizing: border-box;
}

button {
  background-color: red;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  display: block;
  margin: 0 auto;
}

button:hover {
  background-color: green;
}

</style>
</head>
<body>

<?php
session_start();
include 'config.php';
if (isset($_GET["id"])) {
    $produk_id = $_GET["id"];
    $sql = "SELECT * FROM produk WHERE ProdukID = $produk_id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
?>
        <form action="proses_edit_produk.php" method="POST">
            <h2>EDIT PRODUK</h2>
            <input type="hidden" name="produk_id" value="<?php echo $row['ProdukID']; ?>">
            <label for="nama_produk">Nama Produk:</label><br>
            <input type="text" id="nama_produk" name="nama_produk" value="<?php echo $row['NamaProduk']; ?>"><br><br>
            <label for="harga">Harga:</label><br>
            <input type="text" id="harga" name="harga" value="<?php echo $row['Harga']; ?>"><br><br>
            <label for="stok">Stok:</label><br>
            <input type="text" id="stok" name="stok" value="<?php echo $row['Stok']; ?>"><br><br>
            <button type="submit"><i class="fas fa-save"></i> SIMPAN</button>
        </form>
<?php
    } else {
        echo "Produk tidak ditemukan.";
    }

    mysqli_close($conn);
} else {
    echo "ID Produk tidak ditemukan.";
}
?>
