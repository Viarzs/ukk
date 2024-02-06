<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Produk Baru</title>
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
    color: black;
    margin-top: 5px;
    margin-bottom: 30px;
  }

form {
    max-width: 400px;
    margin: 0 auto;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 50, 0.50);
  }

label {
    display: block;
    margin-bottom: 1px;
    color: #333;
  }

input[type="text"], button {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
  }

button {
    background-color: red;
    color: #fff;
    cursor: pointer;
    border-radius: 20px;
  }

button:hover {
    background-color: #8B0000;
  }
</style>
</head>
<body>

<form action="proses_tambah_produk.php" method="POST">
<h2>TAMBAH PRODUK BARU</h2>
  <label for="nama_produk">Nama Produk:</label><br>
  <input type="text" id="nama_produk" name="nama_produk"><br><br>
  
  <label for="harga">Harga:</label><br>
  <input type="text" id="harga" name="harga"><br><br>
  
  <label for="stok">Stok:</label><br>
  <input type="text" id="stok" name="stok"><br><br>
  
  <button type="submit"><i class="fas fa-save"></i> SIMPAN</button>
</form>

</body>
</html>
