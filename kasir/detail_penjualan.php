<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Penjualan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
            text-shadow: 2px 2px 4px rgba(0, 0, 50, 0.50);
            font-size: 35px;
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

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .button {
            background-color: RED;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 10px;
            display: inline-block;
            margin-bottom: 10px;
            border-radius: 20px;
            position: relative;
        }
        
        .button:hover {
            background-color: #8B0000;
        }

        .button i {
            margin-left: 5px;
        }
        
    </style>
</head>
<body>

<h2>DETAIL PENJUALAN</h2>
<a href="dashboard.php" class="button"><i  class="fas fa-arrow-left"></i> KEMBALI KE DASHBOARD</a>
<table>
  <thead>
    <tr>
      <th>NO</th>
      <th>TanggalPenjualan</th>
      <th>NamaProduk</th>
      <th>JUMLAH PRODUK</th>
      <th>TOTAL</th>
      <th>AKSI</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include 'config.php';
    $sql = "SELECT detailpenjualan.*,produk.NamaProduk, penjualan.TanggalPenjualan FROM detailpenjualan 
    LEFT JOIN produk ON detailpenjualan.ProdukID = produk.ProdukID 
    LEFT JOIN penjualan ON detailpenjualan.PenjualanID = penjualan.PenjualanID";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['DetailID'] . "</td>";
            echo "<td>" . $row['TanggalPenjualan'] . "</td>";
            echo "<td>" . $row['NamaProduk'] . "</td>";
            echo "<td>" . $row['JumlahProduk'] . "</td>";
            echo "<td>" . $row['Subtotal'] . "</td>";
            echo "<td>";
            echo "<a href='hapus_detail.php?id=" . $row["DetailID"] . "' title='Hapus'><i style='color:red' class='fas fa-trash-alt'></i></a>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Tidak ada data detail penjualan.</td></tr>";
    }
    mysqli_close($conn);
    ?>
  </tbody>
</table>

</body>
</html>
