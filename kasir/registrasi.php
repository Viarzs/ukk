<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrasi</title>
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
    color: black;
    text-shadow: 2px 2px 4px rgba(0, 0, 50, 0.50);
    font-size: 25px;
  }

  #register-box {
    width: 300px;
    margin: 50px auto;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 50, 0.50);
  }

  input[type="text"],
  input[type="password"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    background-color: blue;
    color: #fff;
    border: none;
    border-radius: 20px;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #00BFFF;
  }

  #login-link {
    text-align: center;
    margin-top: 10px;
  }

  #login-link a {
    color: #4CAF50;
    text-decoration: none;
  }

</style>
</head>
<body>

<div id="register-box">
  <h2>REGISTRASI</h2>
  <form action="register_process.php" method="post">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="text" name="nama_panjang" placeholder="Nama Panjang" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <label for="level">ROLE:</label>
    <select name="level" id="level">
      <option value="admin">Admin</option>
      <option value="petugas">Petugas</option>
    </select><br>
    <input type="submit" value="DAFTAR">
    
  </form>

  </div>

</body>
</html>