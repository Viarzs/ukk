<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulir Pembelian</title>
<style>
  body {
    font-family: helvetica;
    margin: 0;
    padding: 10px;
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
    margin: 150px auto;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 50, 0.50);
  }  
  
  label {
    color: #333;
    margin-left: 10px; 
  }

  .produk{
    width: calc(74% - 22px);
    margin-left: 5px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 20px;
    box-sizing: border-box;
    font-size: 16px;
  }
  
  input[type="text"], input[type="date"], input[type="number"], .jumlah, .harga, .total{
    width: calc(105% - 22px);
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 20px;
    box-sizing: border-box;
    font-size: 16px;
  }

  a {
    text-decoration: none;
    color: white;
    text-align: center;
  }

  .dashboard-button {
    display: block;
    padding: 10px;
    background-color: blue; 
    color: white;
    cursor: pointer;
    border-radius: 20px;
    margin: 1px ;
  }

  .dashboard-button:hover {
    background-color: #00BFFF;
  }

  .hapus-button {
  padding: 10px 50px;
  background-color: red;
  text-align: center;
  color: #fff;
  cursor: pointer;
  border-radius: 20px;
  margin-bottom: 10px;
  margin-left: auto ;
}

.hapus-button:hover {
  background-color: darkred;
}

.submit-button {
  padding: 10px 95px;
  background-color: green;
  color: #fff;
  cursor: pointer;
  border-radius: 20px;
}

.submit-button:hover {
  background-color: darkgreen;
}

  
</style>
</head>
<body>



<form action="proses_tambah_pembelian.php" method="POST" id="formPembelian">
<h2>FORMULIR PEMBELIAN</h2>
  
  
  <div id="barang-container">
    <div class="barang">
      <input type="hidden" name="pelanggan_id" value="<?php echo $pelanggan_id; ?>">
  
      <label>Tanggal Transaksi:</label>
      <input type="date" name="tanggal_transaksi" required>
      
      <label>Nama Produk:</label>
      <select class="produk" name="produk[]">
        <?php
        include 'config.php';
        $sql_produk = "SELECT ProdukID, NamaProduk, Harga FROM produk";
        $result_produk = mysqli_query($conn, $sql_produk);
        if (mysqli_num_rows($result_produk) > 0) {
            while ($row_produk = mysqli_fetch_assoc($result_produk)) {
                echo "<option value='" . $row_produk['ProdukID'] . "' data-harga='" . $row_produk['Harga'] . "'>" . $row_produk['NamaProduk'] . "</option>";
            }
        } else {
            echo "<option value=''>Tidak ada produk</option>";
        }
        ?>
      </select>
      <br><br>
      <label for="jumlah>">Jumlah:</label>
      <input type="number" class="jumlah" name="jumlah[]" min="1" oninput="hitungTotal()">
      
      <label for="harga">Harga:</label>
      <input type="text" class="harga" name="harga[]" readonly>
      
      <label for="total">Total Harga:</label>
      <input type="text" class="total" name="total[]" readonly>
      <button type="submit" class="submit-button">SUBMIT</button>
      <button type="button" class="hapus-button" onclick="hapusBarang(this)">HAPUS</button>
    </div>
  </div>
  
  <a href="pembelian.php" class="dashboard-button">KEMBALI KE PEMBELIAN</a>
</form>

<script>
function tambahBarang() {
    var container = document.getElementById("barang-container");
    var barangBaru = document.createElement("div");
    barangBaru.classList.add("barang");
    barangBaru.innerHTML = `
      <label>Tanggal Transaksi:</label>
      <input type="date" name="tanggal_transaksi" required>

        <label>Pilih Nama Produk:</label>
        <select class="produk" name="produk[]">
            <?php
            mysqli_data_seek($result_produk, 0);
            while ($row_produk = mysqli_fetch_assoc($result_produk)) {
                echo "<option value='" . $row_produk['ProdukID'] . "' data-harga='" . $row_produk['Harga'] . "'>" . $row_produk['NamaProduk'] . "</option>";
            }
            ?>
        </select>
        
        <label for="jumlah">Jumlah:</label>
        <input type="number" class="jumlah" name="jumlah[]" min="1" oninput="hitungTotal()">
        
        <label for="harga">Harga:</label>
        <input type="text" class="harga" name="harga[]" readonly>
        
        <label for="total">Total Harga:</label>
        <input type="text" class="total" name="total[]" readonly>
        
        <button type="submit" class="submit-button">SUBMIT</button>
        <button type="button" class="hapus-button" onclick="hapusBarang(this)">HAPUS</button>
    `;
    container.appendChild(barangBaru);
}

function hapusBarang(btn) {
    btn.parentNode.remove();
}

function hitungTotal() {
    var barang = document.getElementsByClassName("barang");
    for (var i = 0; i < barang.length; i++) {
        var harga = barang[i].getElementsByClassName("produk")[0].options[barang[i].getElementsByClassName("produk")[0].selectedIndex].getAttribute("data-harga");
        var jumlah = barang[i].getElementsByClassName("jumlah")[0].value;
        var total = parseInt(harga) * parseInt(jumlah);
        barang[i].getElementsByClassName("harga")[0].value = harga;
        barang[i].getElementsByClassName("total")[0].value = total;
    }
}
</script>

<?php
// Tutup koneksi
mysqli_close($conn);
?>

</body>
</html>
