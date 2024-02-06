<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Pelanggan Baru</title>
<style>
  body {
    font-family: Helvetica;
    margin: 0;
    padding: 40px;
    background-color: #f0f0f0;
    background-image: url('ukk.jpg'); 
    background-size: cover;
    background-position: center; 
    background-repeat: no-repeat;
  }

  h2 {
    text-align: center;
    color: black;
  }

  form {
    max-width: 400px;
    margin: 130px auto;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 50, 0.50);
  } 

  label {
    display: block;
    margin-bottom: 8px;
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
    background-color: #28a745;
    color: #fff;
    cursor: pointer;
    border-radius: 20px;
  }

  button:hover {
    background-color: #218838;
  }

  a {
    text-align: center;
    text-decoration: none;
    color: white;
    margin-top: 10px;
  }
  .dashboard-button {
    display: block;
    background-color: blue; 
    color: white;
    cursor: pointer;
    border-radius: 20px;
    padding: 10px 99px;
    margin-top: 1px;
  }

  .dashboard-button:hover {
    background-color: #00BFFF;
  }

</style>
</head>
<body>

<form action="proses_tambah_pelanggan.php" method="POST">
<h2>TAMBAH PELANGGAN BARU</h2>
  
  <label for="nama_pelanggan">Nama Pelanggan:</label><br>
  <input type="text" id="nama_pelanggan" name="nama_pelanggan"><br><br>
  
  <label for="alamat">Alamat:</label><br>
  <input type="text" id="alamat" name="alamat"><br><br>
  
  <label for="nomor_telepon">Nomor Telepon:</label><br>
  <input type="text" id="nomor_telepon" name="nomor_telepon"><br><br>
  
  <button type="submit">TAMBAH PELANGGAN</button>
  <a href="pembelian.php" class="dashboard-button">KEMBALI KE PEMBELIAN</a>
</form>

</body>
</html>
