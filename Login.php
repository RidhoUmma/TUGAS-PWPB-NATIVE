<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style> 
   * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  text-decoration: none;
}

body {
  font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
    Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
}

input {
  width: 250px;
  height: 40px;
  padding: 0.5rem;
  border-radius: 5px;
  border: 2px solid #181818;
}

input[type="submit"] {
  display: flex;
  justify-content: center;
  font-weight: bold;
  border-radius: 8px;
  align-items: center;
  cursor: pointer;
  width: 250px;
  height: 40px;
  padding: 0.5rem;
  border-radius: 5px;
  border: 2px solid #181818;
}
input[type="submit"]:hover{
  background-color: blue;
    transition: all ease-in-out .25s;
    border-radius: 7px;

}


.container {
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

form{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

h1{
  display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
}
</style>
</head>
<body>
<div class="container">
    <form action="DataLogin.php" method="POST">
        <h1>Login</h1>
        <label ><h3>Username</h3></label>
        <input type="text" placeholder="Masukkan Username" name="nama" required>
        <br><br>
        <label ><h3>Password</h3></label>
        <input type="password" name="pass" placeholder="Masukkan Password" required>
        <br><br>
        <input type="submit" value="Login" name="login">
    </form>
</div>

    <?php
        if(isset($_POST['login'])) {
            $nama = $_POST['nama'];
            $pass = $_POST['pass'];
        }
    ?>

</body>
</html>