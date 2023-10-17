<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM VALIDASI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="bg-img"></div>

<div class="content">
    <?php

        $nama = $email = $jnskelamin = $alamat = $cita = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $nama = coba_input($_POST['nama']);
            $email = coba_input($_POST['email']);
            $jnskelamin = coba_input($_POST['jnskelamin']);
            $alamat = coba_input($_POST['alamat']);
            $cita = coba_input($_POST['cita']);
        }

        function coba_input($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h1><center>FORM</center></h1>
            <label style="margin-top: 0;">Nama :</label>
            <input type="text" name="nama"><br>
            <label>Email :</label>
            <input type="text" name="email"><br>
            <label>Alamat :</label>
            <input type="text" name="alamat"><br>
            <label>Cita-cita :</label>
            <input type="text" name="cita"><br>
            <label>Jenis Kelamin</label>
            <input type="radio" name="jnskelamin" value="Perempuan">Perempuan
            <input type="radio" name="jnskelamin" value="Pria">Pria
            <input type="radio" name="jnskelamin" value="Random">Random 
            <input type="submit" name="submit" value="Submit">
        </form>

        <div class="hasil">
            <?php
                echo "<h1><center>HASIL</center></h1>";
                echo "<label>Nama</label>";
                echo "<p>".$nama."</p>";
                echo "<label>Email</label>";
                echo "<p>".$email."</p>";
                echo "<label>Jenis Kelamin</label>";
                echo "<p>".$jnskelamin."</p>";
                echo "<label>Alamat</label>";
                echo "<p>".$alamat."</p>";
                echo "<label>Cita-cita</label>";
                echo "<p>".$cita."</p>";
            ?>
        </div>
    </div>
</body>
</html>
