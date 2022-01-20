<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1</title>
</head>
<body>
    <center>
    <table>
        <h2>HELLO!..SELAMAT DATANG DI DESTINASI YOGYAKARTA..</h2>
        <h3>Daftar dan harga tiket Destinasi Di Yogyakarta :</h3>
        <tr>
            <td>1. Bukit Bintang</td>
            <td></td>
            <td>Rp. 10.000</td>
        </tr>
        <tr>
            <td>2. Pantai Sandranan</td>
            <td></td>
            <td>Rp. 15.000</td>
        </tr>
        <tr>
            <td>3. Candi Borobudur</td>
            <td></td>
            <td>Rp. 50.000</td>
        </tr>
        <tr>
            <td>4. Candi Prambanan</td>
            <td></td>
            <td>Rp. 50.000</td>
        </tr>
        <tr>
            <td>5. Keraton Yogyakarta</td>
            <td></td>
            <td>Rp. 5.000</td>
        </tr>
        <tr>
            <td>6. Malioboro</td>
            <td></td>
            <td>Rp. 5.000</td>
        </tr>
        <tr>
            <td>7. Pandopo Lawas</td>
            <td></td>
            <td>-> Cafe</td>
        </tr>
        <tr>
            <td>8.Goa Pindul</td>
            <td></td>
            <td>Rp. 100.000</td>
        </tr>
        <form action =""method="POST">
            <tr>
                <td><b>Silahkan Pilih</b></td>
                <td><b>:<b></td>
                <td><input type ="number" name ="silahkan"/></td>
            </tr>
            
            <tr>
                <td><input type ="submit" name ="simpan" value ="OK"/></td>
            </tr>
        </form>
    </table>
<?php
if (isset($_POST['simpan'])){
    $pil = $_POST['silahkan'];
    
    if ($pil == "Bukit binatang" || $pil == "1") {
        echo "TIKET Bukit Bintang";
        echo "10.000";
        echo' 
        <form action="" method="post">
        <tr>
        <label>
            <td>Jumlah Tiket? </td>
            <td><input type= "number" name= "orang"></td><br>
            <td>Bayar : </td>
            <td><input type= "number" name= "bayar"></td><br>
            <td><input type= "submit" name= "sim" value="OK"></td>
        </label>
        </tr>
        </form>';
    }else if ($pil == "pantai sadrana" || $pil == "2") {
        echo "TIKET Pantai Sadrana";
        echo "15.000";
        echo'
        <form action="" method="post">
        <tr>
        <label>
            <td>Berapa Tiket? </td>
            <td><input type= "number" name= "orang"></td><br>
            <td>Bayar : </td>
            <td><input type= "number" name= "bayar"></td><br>
            <td><input type= "submit" name= "sim1" value="OK"></td>
        </label>
        </tr>
        </form>';
    } else if ($pil == "candi borobudur" || $pil == "3") {
        echo "TIKET Candi Borobudur";
        echo "50.000";
        echo'
        <form action="" method="post">
        <tr>
        <label>
            <td>Berapa Tiket? </td>
            <td><input type= "number" name= "orang"></td><br>
            <td>Bayar : </td>
            <td><input type= "number" name= "bayar"></td>
            <td><input type= "submit" name= "sim2" value="OK"></td>
        </label>
        </tr>
        </form>';
    } else if ($pil == "candi prambana" || $pil == "4") {
        echo "TIKET Candi Prambana";
        echo "50.000";
        echo'
        <form action="" method="post">
        <tr>
        <label>
            <td>Berapa Tiket? </td>
            <td><input type= "number" name= "orang"></td><br>
            <td>Bayar : </td>
            <td><input type= "number" name= "bayar"></td>
            <td><input type= "submit" name= "sim2" value="OK"></td>
        </label>
        </tr>
        </form>';
    } else if ($pil == "kratin yogyakarta" || $pil == "5") {
        echo "TIKET Kratin Yogyakarta";
        echo "5.000";
        echo'
        <form action="" method="post">
        <tr>
        <label>
            <td>Berapa Tiket? </td>
            <td><input type= "number" name= "orang"></td><br>
            <td>Bayar : </td>
            <td><input type= "number" name= "bayar"></td>
            <td><input type= "submit" name= "sim3" value="OK"></td>
        </label>
        </tr>
        </form>';
    } else if ($pil == "malioboro" || $pil == "6") {
        echo "TIKET Malioboro";
        echo "5.000";
        echo'
        <form action="" method="post">
        <tr>
        <label>
            <td>Jumlah Tiket? </td>
            <td><input type= "number" name= "orang"></td><br>
            <td>Bayar : </td>
            <td><input type= "number" name= "bayar"></td>
            <td><input type= "submit" name= "sim3" value="OK"></td>
        </label>
        </tr>
        </form>';
    } else if ($pil == "goa pindul" || $pil == "8") {
        echo "TIKET Goa Pindul";
        echo "100.000";
        echo'
        <form action="" method="post">
        <tr>
        <label>
            <td>Jumlah Tiket? </td>
            <td><input type= "number" name= "orang"></td><br>
            <td>Bayar : </td>
            <td><input type= "number" name= "bayar"></td>
            <td><input type= "submit" name= "sim4" value="OK"></td>
            </label>
            </tr>
            </form>';
        } else if ($pil == "pendopo lawas" || $pil == "7") {
            echo 'Pendopo Lawas <br> <br>';
            echo ' MENU :<br>';
            echo '<table cellspacing ="15" align ="center">
            <tr>
            <td></td>
            <td>1.Espresso</td>
            <td>Rp.50.000</td>
            </tr>
            <tr>
            <td></td>
            <td>2.Cafe Late</td>
            <td>Rp.35.000</td>
            </tr>
            <tr>
            <td></td>
            <td>3.Americano</td>
            <td>Rp.55.000</td>
            </tr>
            <tr>
            <td></td>
            <td>4.Indomie Telor Kornet</td>
            <td>Rp.25.000</td>
            </tr>
            <tr>
            <td></td>
            <td>5.Soto bandung</td>
            <td>Rp.30.000</td>
            </tr>
            <tr>
            <td></td>
            <td>6.Nasi Goreng</td>
            <td>Rp.20.000</td>
            </tr>
            </table><br> <br>';
            echo 'Silahkan pilih makanan dan minuman  :';
            echo '&nbsp &nbsp';
            echo '<input type ="number">';
            echo '<button name ="kirimm" class ="button">Pilih</button>';
            if (isset($_POST ['kirimm'])) {
                if ($kirim == 1) {
                    echo 'Espresso Rp.50.000';
                }else {
                    echo 'maaf menu yang anda masukan salah';
                }
            }   
    } else {
        echo "Pilihan anda tidak ada";
    }
    
}
if (isset($_POST['sim'])) {
    $harga = 10000;
    $jum = $_POST ['orang'];
    $bayar = $_POST ['bayar'];
    $total = $harga*$jum;
    echo "Total Tiket ".$total. "<br>";
    if ($total < 50000) {
        if ($bayar >= $total) {
            $by = $bayar - $total;
            echo "Kembalian kamu " .$by. "<br>";
        } else {
            echo " Uang Tidak Cukup";
        } 
    } else if ($total >= 100000) {
        $diskon = $total*(0.15);
        $hasil = $total - $diskon;
        echo "Setelah di Diskon " .$hasil. "<br>";
        if ($bayar >= $hasil) {
            $hasill = $bayar - $hasil;
            echo "Kembalian kamu " .$hasill. "<br>";
        } else {
            echo " Uang  Tidak Cukup";
        }
    } else if ($total >= 50000){
        $diskon = $total*(0.05);
        $hasil = $total - $diskon;
        echo "Setelah di Diskon " .$hasil. "<br>";
        if ($bayar >= $hasil) {
            $hasill = $bayar - $hasil;
            echo "Kembalian kamu " .$hasill. "<br>";
        } else {
            echo " Uang Tidak Cukup";
        }
    }
}
if (isset($_POST['sim1'])) {
    $harga = 15000;
    $orang = $_POST ['orang'];
    $bayar = $_POST ['bayar'];
    $total = $harga*$orang;
    echo "Total Tiket  ".$total. "<br>";
    if ($total < 50000) {
        if ($bayar >= $total) {
            $by = $bayar - $total;
            echo "Kembalian kamu " .$by. "<br>";
        } else {
            echo " Uang  Tidak Cukup";
        } 
    } else if ($total >= 100000) {
        $diskon = $total*(0.15);
        $hasil = $total - $diskon;
        echo "Setelah di Diskon " .$hasil. "<br>";
        if ($bayar >= $hasil) {
            $hasill = $bayar - $hasil;
            echo "Kembalian kamu " .$hasill. "<br>";
        } else {
            echo " Uang  Tidak Cukup";
        }
    } else if ($total >= 50000){
        $diskon = $total*(0.05);
        $hasil = $total - $diskon;
        echo "Setelah di Diskon " .$hasil. "<br>";
        if ($bayar >= $hasil) {
            $hasill = $bayar - $hasil;
            echo "Kembalian kamu " .$hasill. "<br>";
        } else {
            echo " Uang  Tidak Cukup";
        }
    }
}
if (isset($_POST['sim2'])) {
    $harga = 50000;
    $orang = $_POST ['orang'];
    $bayar = $_POST ['bayar'];
    $total = $harga*$orang;
    echo "Total Tiket  ".$total. "<br>";
    if ($total < 200000) {
        if ($bayar >= $total) {
            $by = $bayar - $total;
            echo "Kembalian kamu " .$by. "<br>";
        } else {
            echo " Uang  Tidak Cukup";
        } 
    } else if ($total >= 1000000) {
        $diskon = $total*(0.15);
        $hasil = $total - $diskon;
        echo "Setelah di Diskon " .$hasil. "<br>";
        if ($bayar >= $hasil) {
            $hasill = $bayar - $hasil;
            echo "Kembalian kamu " .$hasill. "<br>";
        } else {
            echo " Uang Tidak Cukup";
        }
    } else if ($total >= 200000){
        $diskon = $total*(0.05);
        $hasil = $total - $diskon;
        echo "Setelah di Diskon " .$hasil. "<br>";
        if ($bayar >= $hasil) {
            $hasill = $bayar - $hasil;
            echo "Kembalian kamu " .$hasill. "<br>";
        } else {
            echo " Uang  Tidak Cukup";
        }
    }
}
if (isset($_POST['sim3'])) {
    $harga = 5000;
    $orang = $_POST ['orang'];
    $bayar = $_POST ['bayar'];
    $total = $harga*$orang;
    echo "Total Tiket  ".$total. "<br>";
    if ($total < 20000) {
        if ($bayar >= $total) {
            $by = $bayar - $total;
            echo "Kembalian kamu " .$by. "<br>";
        } else {
            echo " Uang  Tidak Cukup";
        } 
    } else if ($total >= 100000) {
        $diskon = $total*(0.15);
        $hasil = $total - $diskon;
        echo "Setelah di Diskon " .$hasil. "<br>";
        if ($bayar >= $hasil) {
            $hasill = $bayar - $hasil;
            echo "Kembalian kamu " .$hasill. "<br>";
        } else {
            echo " Uang  Tidak Cukup";
        }
    } else if ($total >= 20000){
        $diskon = $total*(0.05);
        $hasil = $total - $diskon;
        echo "Setelah di Diskon " .$hasil. "<br>";
        if ($bayar >= $hasil) {
            $hasill = $bayar - $hasil;
            echo "Kembalian kamu " .$hasill. "<br>";
        } else {
            echo " Uang  Tidak Cukup";
        }
    }
}
if (isset($_POST['sim3'])) {
    $harga = 5000;
    $orang = $_POST ['orang'];
    $bayar = $_POST ['bayar'];
    $total = $harga*$orang;
    echo "Total Tiket  ".$total. "<br>";
    if ($total < 20000) {
        if ($bayar >= $total) {
            $by = $bayar - $total;
            echo "Kembalian kamu " .$by. "<br>";
        } else {
            echo " Uang  Tidak Cukup";
        } 
    } else if ($total >= 100000) {
        $diskon = $total*(0.15);
        $hasil = $total - $diskon;
        echo "Setelah di Diskon " .$hasil. "<br>";
        if ($bayar >= $hasil) {
            $hasill = $bayar - $hasil;
            echo "Kembalian kamu " .$hasill. "<br>";
        } else {
            echo " Uang  Tidak Cukup";
        }
    } else if ($total >= 20000){
        $diskon = $total*(0.05);
        $hasil = $total - $diskon;
        echo "Setelah di Diskon " .$hasil. "<br>";
        if ($bayar >= $hasil) {
            $hasill = $bayar - $hasil;
            echo "Kembalian kamu " .$hasill. "<br>";
        } else {
            echo " Uang  Tidak Cukup";
        }
    }
}
if (isset($_POST['sim4'])) {
    $harga = 100000;
    $orang = $_POST ['orang'];
    $bayar = $_POST ['bayar'];
    $total = $harga*$org;
    echo "Total Tiket  ".$total. "<br>";
    if ($total < 500000) {
        if ($bayar >= $total) {
            $by = $bayar - $total;
            echo "Kembalian kamu " .$by. "<br>";
        } else {
            echo " Uang  Tidak Cukup";
        } 
    } else if ($total >= 1000000) {
        $diskon = $total*(0.15);
        $hasil = $total - $diskon;
        echo "Setelah di Diskon " .$hasil. "<br>";
        if ($bayar >= $hasil) {
            $hasill = $bayar - $hasil;
            echo "Kembalian kamu " .$hasill. "<br>";
        } else {
            echo " Uang  Tidak Cukup";
        }
    } else if ($total >= 500000){
        $diskon = $total*(0.05);
        $hasil = $total - $diskon;
        echo "Setelah di Diskon " .$hasil. "<br>";
        if ($bayar >= $hasil) {
            $hasill = $bayar - $hasil;
            echo "Kembalian kamu " .$hasill. "<br>";
        } else {
            echo " Uang  Tidak Cukup";
        }
    }
}
?>
    </center>
</body>
</html>