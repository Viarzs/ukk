<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Petugas</title>
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
        padding: 10px 10px;
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

    .button, .button i {
        margin-left: 5px;
    }

    .button1 {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        background-color: #4CAF50; 
        color: white; 
        border-radius: 5px; 
        transition: background-color 0.3s ease; 
        border-radius: 20px;
        margin-left: 1101px;
    }

    .button1:hover {
        background-color: #218838;
    }       

    .button1 i {
        margin-right: 5px;
    }

</style>
</head>
<body>

<h2>DATA PETUGAS</h2>
<a href="dashboard.php" class="button"><i class="fas fa-arrow-left"></i> KEMBALI KE DASHBOARD</a>
<a href="registrasi.php" class="button1"><i class="fas fa-user-plus"></i> TAMBAH PETUGAS BARU</a>

<table>
  <thead>
    <tr>
      <th>NO</th>
      <th>NAMA PETUGAS</th>
      <th>USERNAME</th>
      <th>ROLE</th>
      <th>AKSI</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM petugas";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_petugas'] . "</td>";
            echo "<td>" . $row['nama_petugas'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['level'] . "</td>";
            echo "<td>";
            echo "<a href='edit_petugas.php?id=" . $row['id_petugas'] . "' class=' edit-button'><i style='color:red' class='fas fa-edit'></i></a>&nbsp;|&nbsp;";
            echo "<a href='hapus_petugas.php?id=" . $row['id_petugas'] . "' class=' delete-button'><i style='color:red'  class='fas fa-trash-alt'></i></a>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Tidak ada data petugas.</td></tr>";
    }
    mysqli_close($conn);
    ?>
  </tbody>
</table>

</body>
</html>
