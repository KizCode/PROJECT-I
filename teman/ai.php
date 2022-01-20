<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi</title>
</head>
<body style ="background-color: pink;">
<center>
    <form action="" method="post">
        <h1>Selamat Datang</h1>
        <h1>Di Destinasi D.I Yogyakarta</h1>
        <table>
        <tr>
            <td>1. Bukit Bintang</td>
            <td>:</td>
            <td>Rp. 10.000</td>
        </tr>
        <tr>
            <td>2. Pantai sadranan</td>
            <td>:</td>
            <td>Rp. 15.000</td>
        </tr>
        <tr>
            <td>3. Candi borobudur</td>
            <td>:</td>
            <td>Rp. 50.000</td>
        </tr>
        <tr>
            <td>4. Candi perambanan</td>
            <td>:</td>
            <td>Rp. 50.000</td>
        </tr>
        <tr>
            <td>5. Keraton Yogyakarta</td>
            <td>:</td>
            <td>Rp. 5.000</td>
        </tr>
        <tr>
            <td>6. Malioboro</td>
            <td>:</td>
            <td>Rp. 5.000</td>
        </tr>
        <tr>
            <td>7. Pendopo lawas</td>
            <td>-></td>
            <td>Cafe</td>
        </tr>
        <tr>
            <td>8. Goa pindul</td>
            <td>:</td>
            <td>Rp. 100.000</td>
        </tr>
        <tr>
            <td>Pilih Destinasi</td>
            <td>:</td>
            <td><input type="number" name="pilih" /></td>
        </tr>
        <tr>
            <td><input type="submit" name="simpon" value="KIRIM"></td>
        </tr>
    </table>
    </form>
    </center>
</body>
</html>

<?php
if (isset($_POST['simpon'])) {
$pilih = $_POST['pilih'];

if ($pilih == "Bukit binatang" || $pilih == "1") {
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
        <td><input type= "submit" name= "simpan" value="OK"></td>
    </label>
    </tr>
    </form>';
}else if ($pilih == "pantai sadrana" || $pilih == "2") {
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
        <td><input type= "submit" name= "simpan1" value="OK"></td>
    </label>
    </tr>
    </form>';
} else if ($pilih == "candi borobudur" || $pilih == "3") {
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
        <td><input type= "submit" name= "simpan2" value="OK"></td>
    </label>
    </tr>
    </form>';
} else if ($pilih == "candi prambana" || $pilih == "4") {
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
        <td><input type= "submit" name= "simpan2" value="OK"></td>
    </label>
    </tr>
    </form>';
} else if ($pilih == "kratin yogyakarta" || $pilih == "5") {
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
        <td><input type= "submit" name= "simpan3" value="OK"></td>
    </label>
    </tr>
    </form>';
} else if ($pilih == "malioboro" || $pilih == "6") {
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
        <td><input type= "submit" name= "simpan3" value="OK"></td>
    </label>
    </tr>
    </form>';
} else if ($pilih == "goa pindul" || $pilih == "8") {
    echo "TIKET Goa Pindul";
    echo "100.000";
    echo'
    <form action="" method="post">
    <tr>
    <label>
        <td>Jumlah Tiket? </td>
        <td><input type= "number" name= "orang"></td><br>
        <td>Bayar : </td>
        <td><input type= "number" name= "bayar
        "></td>
        <td><input type= "submit" name= "simpan4" value="OK"></td>
        </label>
        </tr>
        </form>';
    } else if ($pilih == "pendopo lawas" || $pilih == "7") {
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
if (isset($_POST['simpan'])) {
$harga = 10000;
$jumlah = $_POST ['orang'];
$bayar = $_POST ['bayar'];
$total = $harga*$jumlah;
echo "Total Tiket ".$total. "<br>";
if ($total < 50000) {
    if ($bayar >= $total) {
        $kembalian = $bayar - $total;
        echo "Kembalian Anda " .$kembalian. "<br>";
    } else {
        echo " Uang Anda Tidak Cukup";
    } 
} else if ($total >= 100000) {
    $diskon = $total*(0.15);
    $hasil = $total - $diskon;
    echo "Setelah di Diskon " .$hasil. "<br>";
    if ($bayar > $hasil) {
        
    } else {
        echo " Uang Anda Tidak Cukup";
    }
} else if ($total >= 50000){
    $diskon = $total*(0.05);
    $hasil = $total - $diskon;
    echo "Setelah di Diskon " .$hasil. "<br>";
    if ($bayar >= $hasil) {
        $hasill = $bayar - $hasil;
        echo "Kembalian Anda " .$hasill. "<br>";
    } else {
        echo " Uang Anda Tidak Cukup";
    }
}
}
if (isset($_POST['simpan1'])) {
$harga = 15000;
$orang = $_POST ['orang'];
$bayar = $_POST ['bayar'];
$total = $harga*$orang;
echo "Total Tiket  ".$total. "<br>";
if ($total < 50000) {
    if ($bayar >= $total) {
        $kembalian = $bayar - $total;
        echo "Kembalian Anda " .$kembalian. "<br>";
    } else {
        echo " Uang Anda Tidak Cukup";
    } 
} else if ($total >= 100000) {
    $diskon = $total*(0.15);
    $hasil = $total - $diskon;
    echo "Setelah di Diskon " .$hasil. "<br>";
    if ($bayar >= $hasil) {
        $hasill = $bayar - $hasil;
        echo "Kembalian Anda " .$hasill. "<br>";
    } else {
        echo " Uang Anda Tidak Cukup";
    }
} else if ($total >= 50000){
    $diskon = $total*(0.05);
    $hasil = $total - $diskon;
    echo "Setelah di Diskon " .$hasil. "<br>";
    if ($bayar >= $hasil) {
        $hasill = $bayar - $hasil;
        echo "Kembalian Anda " .$hasill. "<br>";
    } else {
        echo " Uang Anda Tidak Cukup";
    }
}
}
if (isset($_POST['simpan2'])) {
$harga = 50000;
$orang = $_POST ['orang'];
$bayar = $_POST ['bayar'];
$total = $harga*$orang;
echo "Total Tiket  ".$total. "<br>";
if ($total < 200000) {
    if ($bayar >= $total) {
        $kembalian = $bayar - $total;
        echo "Kembalian Anda " .$kembalian. "<br>";
    } else {
        echo " Uang Anda Tidak Cukup";
    } 
} else if ($total >= 1000000) {
    $diskon = $total*(0.15);
    $hasil = $total - $diskon;
    echo "Setelah di Diskon " .$hasil. "<br>";
    if ($bayar >= $hasil) {
        $hasill = $bayar - $hasil;
        echo "Kembalian Anda " .$hasill. "<br>";
    } else {
        echo " Uang Anda Tidak Cukup";
    }
} else if ($total >= 200000){
    $diskon = $total*(0.05);
    $hasil = $total - $diskon;
    echo "Setelah di Diskon " .$hasil. "<br>";
    if ($bayar >= $hasil) {
        $hasill = $bayar - $hasil;
        echo "Kembalian Anda " .$hasill. "<br>";
    } else {
        echo " Uang Anda Tidak Cukup";
    }
}
}
if (isset($_POST['simpan3'])) {
$harga = 5000;
$orang = $_POST ['orang'];
$bayar = $_POST ['bayar'];
$total = $harga*$orang;
echo "Total Tiket  ".$total. "<br>";
if ($total < 20000) {
    if ($bayar >= $total) {
        $kembalian = $bayar - $total;
        echo "Kembalian Anda " .$kembalian. "<br>";
    } else {
        echo " Uang Anda Tidak Cukup";
    } 
} else if ($total >= 100000) {
    $diskon = $total*(0.15);
    $hasil = $total - $diskon;
    echo "Setelah di Diskon " .$hasil. "<br>";
    if ($bayar >= $hasil) {
        $hasill = $bayar - $hasil;
        echo "Kembalian Anda " .$hasill. "<br>";
    } else {
        echo " Uang Anda Tidak Cukup";
    }
} else if ($total >= 20000){
    $diskon = $total*(0.05);
    $hasil = $total - $diskon;
    echo "Setelah di Diskon " .$hasil. "<br>";
    if ($bayar >= $hasil) {
        $hasill = $bayar - $hasil;
        echo "Kembalian Anda " .$hasill. "<br>";
    } else {
        echo " Uang Anda Tidak Cukup";
    }
}
}
if (isset($_POST['simpan3'])) {
$harga = 5000;
$orang = $_POST ['orang'];
$bayar = $_POST ['bayar'];
$total = $harga*$orang;
echo "Total Tiket  ".$total. "<br>";
if ($total < 20000) {
    if ($bayar >= $total) {
        $kembalian = $bayar - $total;
        echo "Kembalian Anda " .$kembalian. "<br>";
    } else {
        echo " Uang Anda Tidak Cukup";
    } 
} else if ($total >= 100000) {
    $diskon = $total*(0.15);
    $hasil = $total - $diskon;
    echo "Setelah di Diskon " .$hasil. "<br>";
    if ($bayar >= $hasil) {
        $hasill = $bayar - $hasil;
        echo "Kembalian Anda " .$hasill. "<br>";
    } else {
        echo " Uang Anda Tidak Cukup";
    }
} else if ($total >= 20000){
    $diskon = $total*(0.05);
    $hasil = $total - $diskon;
    echo "Setelah di Diskon " .$hasil. "<br>";
    if ($bayar >= $hasil) {
        $hasill = $bayar - $hasil;
        echo "Kembalian Anda " .$hasill. "<br>";
    } else {
        echo " Uang Anda Tidak Cukup";
    }
}
}
if (isset($_POST['simpan4'])) {
$harga = 100000;
$orang = $_POST ['orang'];
$bayar = $_POST ['bayar'];
$total = $harga*$org;
echo "Total Tiket  ".$total. "<br>";
if ($total < 500000) {
    if ($bayar >= $total) {
        $kembalian = $bayar - $total;
        echo "Kembalian Anda " .$kembalian. "<br>";
    } else {
        echo " Uang Anda Tidak Cukup";
    } 
} else if ($total >= 1000000) {
    $diskon = $total*(0.15);
    $hasil = $total - $diskon;
    echo "Setelah di Diskon " .$hasil. "<br>";
    if ($bayar >= $hasil) {
        $hasill = $bayar - $hasil;
        echo "Kembalian Anda " .$hasill. "<br>";
    } else {
        echo " Uang Anda Tidak Cukup";
    }
} else if ($total >= 500000){
    $diskon = $total*(0.05);
    $hasil = $total - $diskon;
    echo "Setelah di Diskon " .$hasil. "<br>";
    if ($bayar >= $hasil) {
        $hasill = $bayar - $hasil;
        echo "Kembalian Anda " .$hasill. "<br>";
    } else {
        echo " Uang Anda Tidak Cukup";
    }
}
}
?>