<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulir Pembelian</title>
<style>
  body {
    font-family: Helvetica;
    margin: 150px;
    padding: 0;
    background-image: url('ukk.jpg'); 
    background-size: cover;
    background-position: center; 
    background-repeat: no-repeat;
  }

  h2 {
    text-align: center;
    color: black;
    margin-top: 5px;
  }

  form {
    max-width: 400px;
    margin: 250px auto;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 50, 0.50);
  }

  label {
    display: block;
    margin-top: 40px;
  }

  select, button {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
  }

  select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"%3E%3Cpath d="M7 10l5 5 5-5z" /%3E%3C/svg%3E');
    background-repeat: no-repeat;
    background-position: right 10px center;
    background-size: 12px;
  }
  
  a {
    text-align: center;
    text-decoration: none;
    color: white;
    margin-top: 10px;
  }

  .add-customer-link {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    text-decoration: none;
    background-color: #28a745;
    color: white;
    border-radius: 20px;
    margin-left: 70px;
    margin-top: 20px;
  }

  .add-customer-link:hover {
    background-color: #218838;
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

  .submit-button {
    background-color: #FF0000; 
    color: #fff;
    cursor: pointer;
    border-radius: 20px;
    margin-top: 10px;
  }

  .submit-button:hover {
    background-color: #8B0000;
  }
</style>
</head>
<body>

<form action="tambah_pembelian.php" method="POST">
    <h2>FORMULIR PEMBELIAN</h2>
    <label for="pelanggan">Pilih Pelanggan:</label><br>
    <select id="pelanggan" name="pelanggan">
        <?php
        include 'config.php';
        $sql = "SELECT PelangganID, NamaPelanggan FROM pelanggan";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['PelangganID'] . "'>" . $row['NamaPelanggan'] . "</option>";
            }
        } else {
            echo "<option value=''>Tidak ada pelanggan</option>";
        }

        mysqli_close($conn);
        ?>
    </select>
    <a href="tambah_pelanggan.php" class="add-customer-link">TAMBAH PELANGGAN BARU  </a><br><br>
    
    <button type="submit" class="submit-button">SUBMIT</button>

    <a href="dashboard.php" class="dashboard-button">KEMBALI KE DASHBOARD</a>
</form>

</body>
</html>
