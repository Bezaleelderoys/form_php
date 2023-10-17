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
<?php
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
?>