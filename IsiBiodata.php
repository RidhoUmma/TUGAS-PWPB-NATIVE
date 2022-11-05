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

input[type="radio"] {
  width: 20px;
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
  margin-top:30px;
}
form{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
     margin-top: 50px;

}
h1{
  margin-bottom:10px;
}


</style>
</head>
<body>
    <div class="container">
    <form action="DataBiodata.php" method="POST">
    <h1>Data Biodata</h1>
    <label ><h3>Nama Lengkap</h3></label>
        <input type="text" placeholder="Masukkan Nama" name="neme" required>
        <br>
        <label ><h3>Kelas</h3></label>
        <input type="text" placeholder="Masukkan Kelas" name="kl" required>
        <br>
        <label ><h3>Jurusan</h3></label>
        <input type="text" placeholder="Masukkan Jurusan" name="js" required>
        <br>
        <label ><h3>Alamat</h3></label>
        <input type="text" placeholder="Masukkan Alamat" name="al" required>
        <br>
        <div class="btn-group">
        <label ><h3>Jenis Kelamin</h3></label>
          <br>
          <input type="radio" class="btn-check" name="options" id="option1" value="laki-laki" />
          <label class="btn btn-secondary" for="option1">Laki-Laki</label>

          <input type="radio" class="btn-check" name="options" id="option2" value="Perempuan" />
          <label class="btn btn-secondary" for="option2">Perempuan</label>
        </div>
        <br>
        <label ><h3>No Hp</h3></label>
        <input type="number" placeholder="Masukkan No Hp" name="hp" required>
        <br>
        <label ><h3>Email</h3></label>
        <input type="email" placeholder="Masukkan Email" name="em" required>
        <br>
        <input type="submit" value="Biodata" name="biodata">
        
    </form>
    </div>
    <?php

        if(isset($_POST['biodata'])) {
            $nama = $_POST['neme'];
            $kls = $_POST['kl'];
            $jrs = $_POST['js'];
            $alamat = $_POST['al'];
            $jenis = $_POST['options'];
            $nohp = $_POST['hp'];
            $email = $_POST['em'];
        }

    ?>

</body>
</html>