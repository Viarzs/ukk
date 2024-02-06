<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('ukk.jpg');
    background-size: cover;
    background-position: center;
  }
  #login-box {
    width: 300px;
    margin: 300px auto;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 50, 0.50);
    
  }
  h2 {
    text-align: center;
    color: black;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.50);
    font-size: 25px;
  }
  input[type="text"],
  input[type="password"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: transparent; 
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
</style>
</head>
<body>

<div id="login-box">
  <h2>LOGIN</h2>
  <form action="login_process.php" method="post">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <?php if(isset($_GET['error'])) { ?>
      <p style="color:red;"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <input type="submit" value="MASUK">
  </form>
</div>

</body>
</html>
