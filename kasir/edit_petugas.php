<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Petugas</title>
<link rel="stylesheet" href="styles.css">
<style>
body {
    font-family: Arial, sans-serif;
    margin: 70px;
    padding: 0;
    background-image: url('ukk.jpg'); 
    background-size: cover;
    background-position: center; 
    background-repeat: no-repeat;
}
h2 {
    text-align: center;
    color: black;
    text-shadow: 2px 2px 4px rgba(0, 0, 50, 0.50);
    font-size: 25px;
}
form {
    max-width: 400px;
    margin: 0 auto;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 50, 0.50);
}
label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}
input[type="text"], select, input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
}
input[type="submit"] {
    display: block;
    background-color: red; 
    color: white;
    cursor: pointer;
    border-radius: 20px;
    padding: 10px 99px;
    margin-top: 1px;
  }
    
input[type="submit"]:hover {
    background-color: #8B0000;
}
</style>
</head>
<body>

<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM petugas WHERE id_petugas=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
?>
<form action="proses_edit_petugas.php" method="post">
<h2>EDIT PETUGAS</h2>
  <input type="hidden" name="id" value="<?php echo $row['id_petugas']; ?>">
  <label for="nama_petugas">Nama Petugas:</label><br>
  <input type="text" id="nama_petugas" name="nama_petugas" value="<?php echo $row['nama_petugas']; ?>"><br>
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username" value="<?php echo $row['username']; ?>"><br>
  <label for="level">Level:</label><br>
  <select id="level" name="level">
    <option value="admin" <?php if ($row['level'] == 'admin') echo 'selected'; ?>>Admin</option>
    <option value="user" <?php if ($row['level'] == 'user') echo 'selected'; ?>>Petugas</option>
  </select><br><br>
  <input type="submit" name="submit" value="SUBMIT">
</form>
<?php
    } else {
        echo "Petugas tidak ditemukan.";
    }
} else {
    echo "Invalid request.";
}
mysqli_close($conn);
?>

</body>
</html>