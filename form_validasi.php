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
    <!-- <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> -->
        <form action="output.php" method="post" target="_blank">
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

        <!-- <?php
            echo "<h1>Hasil Inputan Kalian</h1>";
            echo $nama;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $jnskelamin;
            echo "<br>";
            echo $alamat;
            echo "<br>";
            echo $cita;
            echo "<br>";
        ?> -->
    </div>
</body>
</html>