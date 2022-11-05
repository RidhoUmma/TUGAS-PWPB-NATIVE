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
  list-style: none;
  text-decoration: none;
}

body {
  font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
    Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
}
.container {
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}
.ud {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 50rem;
  padding: 10rem;
  box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
  border-radius: 15px;
 
}
input{
   margin: 30px;
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

form{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 50px;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="ud">
            <form action="Login.php">
                <h1>Data Biodata</h1>
<h3>
<?php
echo 'Nama';
echo '<br>';
echo $_POST['neme'];
echo '<br>';
echo '<br>';
echo 'Kelas';
echo '<br>';
echo $_POST['kl'];
echo '<br>';
echo '<br>';
echo 'Jurusan';
echo '<br>';
echo $_POST['js'];
echo '<br>';
echo '<br>';
echo 'Alamat';
echo '<br>';
echo $_POST['al'];
echo '<br>';
echo '<br>';
echo 'Jenis Kelamin';
echo '<br>';
echo $_POST['options'];
echo '<br>';
echo '<br>';
echo 'No Hp';
echo '<br>';
echo $_POST['hp'];
echo '<br>';
echo '<br>';
echo 'Email';
echo '<br>';
echo $_POST['em']
?>
<br>
<input type="submit" value="Kembali" name="kmbl">
</h3>
</form>
</div>


    </div>
</body>
</html>
