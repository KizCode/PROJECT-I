<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
<center>
    <form action="" method="post">
        <h2>TEST</h2>
        <table>
            <tr>
                <td>1. Program Pengulangan Kelipatan 2</td>
            </tr>
            <tr>
                <td>2. Program Pengulangan Kelipatan 5 x 5</td>
            </tr>
            <tr>
                <td>3. Program Ganjil Genap</td>
            </tr>
            <tr>
                <td>4. Program Pengulangan Kuadrat</td>
            </tr>
            <tr>
                <td>Pilih</td>
                <td>:</td>
                <td><input type="text" name="pilih" /></td>
            </tr>
            <tr>
                <td>Masukkan Angka</td>
                <td>:</td>
                <td><input type="text" name="masuk"></td>
            </tr>
            <tr>
                <td><input type="submit" name="simpan" value="KIRIM"></td>
            </tr>
            </table>
         </form>
        </table>
</center>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $pilih = $_POST['pilih'];
    $masuk = $_POST['masuk'];

    if ($pilih == 1) {
        echo "<center>";
        echo "<br>";
        echo "<h3><i>Deret Bilangan Kelipatan 2</i></h3>";
        echo "<br>";
        echo "<br>";
        for ($i= 2; $i <= $masuk; $i+=2) {
            echo $i;
            echo "<br />";
        }
        echo "</center>";
    } else if ($pilih == 2) {
        echo "<center>";
        echo "<br>";
        echo "<h3><i>Deret Bilangan Kelipatan 5 x 5</i></h3>";
        echo "<br>";
        echo "<br>";
        for ($i= 5; $i <= $masuk; $i=$i+=5) {
            echo $i;
            echo "<br />";
        } 
        echo "</center>";
    } else if ($pilih == 3) {
        echo "<center>";
        echo "<br>";
        echo "<h3><i>Deret Bilangan Kelipatan 5 x 5</i></h3>";
        echo "<br>";
        echo "<br>";
        for ($i = 1; $i <= $masuk; $i++) {
            echo "<br />";
            if( ($i % 2) == 0){
                echo "$i Adalah Bilangan Genap<br>";
            }else {
                echo "$i Adalah Bilangan Ganjil<br>";
            }
        } 
        echo "</center>";
    } else if ($pilih == 4) {
        echo "<center>";
        echo "<br>";
        echo "<h3><i>Deret Bilangan Kelipatan 5 x 5</i></h3>";
        echo "<br>";
        echo "<br>";
        for ($i=1; $i <= $masuk ; $i++) { 
            $hasil = $i * $i;
            echo "$i x $i = $hasil<br>";
        }
        echo "</center>";
    }
}
?>