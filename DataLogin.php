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

a{
    color : red;
}
a:hover{
  color:black;
}
form{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
    </style>
</head>
<body><div class="container">
    <div class="ud">

     <form action="IsiBiodata.php"  method="POST">
        <br>
      <h3>  <?php
         echo 'Nama';
         echo '<br>';
         echo $_POST['nama'];
         echo '<br>';
         echo '<br>';
         echo 'Password';
         echo '<br>';
         echo $_POST['pass'];
         echo '<br>';
        ?></h3>
        <br>
    <p>Klik Ini untuk  <a href="IsiBiodata.php">Isi Biodata</a> </p> 
     </form>
     </div>
     </div>
</body>
</html>