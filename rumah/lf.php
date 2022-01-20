<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lf.css">
    <title>Document</title>
</head>
<body>
    <center>
        <div class="desti">
            <h1>Destinasi Wisata</h1>
            <table>
                <tr>
                    <td><h2>No</h2></td>
                    <td><h2>Detinasi</h2></td>
                    <td><h2>Harga</h2></td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td><h3>Bukit Bintang</h3></td>
                    <td>Rp. 10RB</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td><h3>Pantai Sadranan</h3></td>
                    <td>Rp. 15RB</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td><h3>Candi Borobudur</h3></td>
                    <td>Rp. 50RB</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td><h3>Candi Prambanan</h3></td>
                    <td>Rp. 50RB</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td><h3>Kratin Yogyakarta</h3></td>
                    <td>Rp. 5RB</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td><h3>Maliobro</h3></td>
                    <td>Rp. 5RB</td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td><h3>Pendopo Lawas</h3></td>
                    <td>Cafe</td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td><h3>Goa Pindul</h3></td>
                    <td>Rp. 100RB</td>
                </tr>
                <tr>
                    <td><form action="" method="post">
                        <tr>
                            <label for="">
                                <td>Destinasi Kemana? </td>
                                <td><input type= "text" name= "des"></td>
                            </label>
                        </tr>
                        <tr>
                            <td><input type="submit" name="pro" value="Proses"></td>
                        </tr>
                    </form></td>
                </tr>
            </table>
        </div>
        
<?php
if (isset($_POST['pro'])){
    $des = $_POST['des'];
    if ($des == "bukit binatang" || $des == "1") {
        echo "TIKET Bukit Bintang ";
        echo "Rp.10rb/Orang";
        echo'
        <form action="" method="post">
        <label>
        <table>
            <tr>
                <td>Berapa Tiket? </td>
                <td><input type= "number" name= "org"></td><br>
            </tr>
            <tr>
                <td>Bayar </td>
                <td><input type= "number" name= "byr"></td><br>
            </tr>
        </table>
            <td><input type= "submit" name= "set" value="SET"></td>
        </label>
        </form>';   
    }else if ($des == "pantai sadrana" || $des == "2") {
        echo "TIKET Pantai Sadrana ";
        echo "Rp.15rb/Orang";
        echo'
        <form action="" method="post">
        <label>
        <table>
            <tr>
                <td>Berapa Tiket? </td>
                <td><input type= "number" name= "org"></td><br>
            </tr>
            <tr>
                <td>Bayar </td>
                <td><input type= "number" name= "byr"></td><br>
            </tr>
        </table>
            <td><input type= "submit" name= "set1" value="SET"></td>
        </label>
        </form>';
    } else if ($des == "candi borobudur" || $des == "3") {
        echo "TIKET Candi Borobudur ";
        echo "Rp.50rb/Orang";
        echo'
        <form action="" method="post">
        <label>
        <table>
            <tr>
                <td>Berapa Tiket? </td>
                <td><input type= "number" name= "org"></td><br>
            </tr>
            <tr>
                <td>Bayar </td>
                <td><input type= "number" name= "byr"></td><br>
            </tr>
        </table>
            <td><input type= "submit" name= "set2" value="SET"></td>
        </label>
        </form>';
    } else if ($des == "candi prambana" || $des == "4") {
        echo "TIKET Candi Prambana ";
        echo "Rp.50rb/Orang";
        echo'
        <form action="" method="post">
        <label>
        <table>
            <tr>
                <td>Berapa Tiket? </td>
                <td><input type= "number" name= "org"></td><br>
            </tr>
            <tr>
                <td>Bayar </td>
                <td><input type= "number" name= "byr"></td><br>
            </tr>
        </table>
            <td><input type= "submit" name= "set2" value="SET"></td>
        </label>
        </form>';
    } else if ($des == "kratin yogyakarta" || $des == "5") {
        echo "TIKET Kratin Yogyakarta ";
        echo "Rp.5rb/Orang";
        echo'
        <form action="" method="post">
        <label>
        <table>
            <tr>
                <td>Berapa Tiket? </td>
                <td><input type= "number" name= "org"></td><br>
            </tr>
            <tr>
                <td>Bayar </td>
                <td><input type= "number" name= "byr"></td><br>
            </tr>
        </table>
            <td><input type= "submit" name= "set3" value="SET"></td>
        </label>
        </form>';
    } else if ($des == "malioboro" || $des == "6") {
        echo "TIKET Malioboro ";
        echo "Rp.5rb/Orang";
        echo'
        <form action="" method="post">
        <label>
        <table>
            <tr>
                <td>Berapa Tiket? </td>
                <td><input type= "number" name= "org"></td><br>
            </tr>
            <tr>
                <td>Bayar </td>
                <td><input type= "number" name= "byr"></td><br>
            </tr>
        </table>
            <td><input type= "submit" name= "set3" value="SET"></td>
        </label>
        </form>';
    } else if ($des == "goa pindul" || $des == "8") {
        echo "TIKET Goa Pindul ";
        echo "Rp.100rb/Orang";
        echo'
        <form action="" method="post">
        <label>
        <table>
            <tr>
                <td>Berapa Tiket? </td>
                <td><input type= "number" name= "org"></td><br>
            </tr>
            <tr>
                <td>Bayar </td>
                <td><input type= "number" name= "byr"></td><br>
            </tr>
        </table>
            <td><input type= "submit" name= "set4" value="SET"></td>
        </label>
        </form>';
    } else if ($des == "pendopo lawas" || $des == "7") {
        echo 'Pendopo Lawas <br> <br>';
        echo 'MAIN MENU :<br>';
        echo '<table cellspacing ="15" align ="center">
        <tr>
        <th></th>
        <th>Menu</th>
        <th>Harga</th>
        </tr>
        <tr>
        <td></td>
        <td>1.Rendang</td>
        <td>Rp.25.000</td>
        </tr>
        <tr>
        <td></td>
        <td>2.Ayam Goreng</td>
        <td>Rp.30.000</td>
        </tr>
        <tr>
        <td></td>
        <td>3.Krupuk</td>
        <td>Rp.5.000</td>
        </tr>
        <tr>
        <td></td>
        <td>4.Teh</td>
        <td>Rp.5.000</td>
        </tr>
        <tr>
        <td></td>
        <td>5.Kopi</td>
        <td>Rp.10.000</td>
        </tr>
        <tr>
        <td></td>
        <td>6.Fanta</td>
        <td>Rp.30.000</td>
        </tr>
        </table><br> <br>';
        echo 
        '<form action="" method="post">
        <table>
            <td>Silahkan Pilih Mankan & Minumny</td>;
            <td><input type="text" name="mkn" id=""></td>
            <tr>
            <td>Berapa Prosi?</td>
            <td><input type="number" name="prs" id=""></td>
            </tr>
            <tr>
            <td>Bayar</td>
            <td><input type="number" name="byr" id=""></td>
            </tr>
            </table>
        <td><input type="submit" name= "set5" value="SET"></td>
        </form>';   
    } else {
        echo "Pilihan anda tidak ada";
    }
}
if (isset($_POST['set'])) {
    $uang = 10000;
    $org = $_POST ['org'];
    $byr = $_POST ['byr'];
    $total = $uang*$org;
    echo "Total Tiket Anda ".$total. "<br>";
    if ($total < 50000) {
        if ($byr > $total) {
            $byuu = $byr - $total;
            echo "Kembalian Anda " .$byuu. "<br>";
        }else if ($byr == $total) {
            echo "Uang Anda Pas";
        } else {
            echo " Uang Anda Tidak Cukup";
        } 
    } else if ($total >= 100000) {
        $dis = $total*(0.15);
        $buy = $total - $dis;
        echo "Setelah di Diskon " .$buy. "<br>";
        if ($byr > $buy) {
            $byuu = $byr - $buy;
            echo "Kembalian Anda " .$byuu. "<br>";
        }else if ($byr == $total) {
            echo "Uang Anda Pas";
        } else {
            echo " Uang Anda Tidak Cukup";
        }
    } else if ($total >= 50000){
        $dis = $total*(0.05);
        $buy = $total - $dis;
        echo "Setelah di Diskon " .$buy. "<br>";
        if ($byr > $buy) {
            $byuu = $byr - $buy;
            echo "Kembalian Anda " .$byuu. "<br>";
        }else if ($byr == $total) {
            echo "Uang Anda Pas";   
        } else {
            echo " Uang Anda Tidak Cukup";
        }
    }
}
if (isset($_POST['set1'])) {
    $uang = 15000;
    $org = $_POST ['org'];
    $byr = $_POST ['byr'];
    $total = $uang*$org;
    echo "Total Tiket Anda ".$total. "<br>";
    if ($total < 50000) {
        if ($byr > $total) {
            $byuu = $byr - $total;
            echo "Kembalian Anda " .$byuu. "<br>";
        }else if ($byr == $total) {
            echo "Uang Anda Pas";
        } else {
            echo " Uang Anda Tidak Cukup";
        } 
    } else if ($total >= 100000) {
        $dis = $total*(0.15);
        $buy = $total - $dis;
        echo "Setelah di Diskon " .$buy. "<br>";
        if ($byr > $buy) {
            $byuu = $byr - $buy;
            echo "Kembalian Anda " .$byuu. "<br>";
        }else if ($byr == $total) {
            echo "Uang Anda Pas";
        } else {
            echo " Uang Anda Tidak Cukup";
        }
    } else if ($total >= 50000){
        $dis = $total*(0.05);
        $buy = $total - $dis;
        echo "Setelah di Diskon " .$buy. "<br>";
        if ($byr > $buy) {
            $byuu = $byr - $buy;
            echo "Kembalian Anda " .$byuu. "<br>";
        }else if ($byr == $total) {
            echo "Uang Anda Pas";
        } else {
            echo " Uang Anda Tidak Cukup";
        }
    }
}
if (isset($_POST['set2'])) {
    $uang = 50000;
    $org = $_POST ['org'];
    $byr = $_POST ['byr'];
    $total = $uang*$org;
    echo "Total Tiket Anda ".$total. "<br>";
    if ($total < 200000) {
        if ($byr > $total) {
            $byuu = $byr - $total;
            echo "Kembalian Anda " .$byuu. "<br>";
        }else if ($byr == $total) {
            echo "Uang Anda Pas";
        } else {
            echo " Uang Anda Tidak Cukup";
        } 
    } else if ($total >= 1000000) {
        $dis = $total*(0.15);
        $buy = $total - $dis;
        echo "Setelah di Diskon " .$buy. "<br>";
        if ($byr > $buy) {
            $byuu = $byr - $buy;
            echo "Kembalian Anda " .$byuu. "<br>";
        }else if ($byr == $total) {
            echo "Uang Anda Pas";
        } else {
            echo " Uang Anda Tidak Cukup";
        }
    } else if ($total >= 200000){
        $dis = $total*(0.05);
        $buy = $total - $dis;
        echo "Setelah di Diskon " .$buy. "<br>";
        if ($byr > $buy) {
            $byuu = $byr - $buy;
            echo "Kembalian Anda " .$byuu. "<br>";
        }else if ($byr == $total) {
            echo "Uang Anda Pas";
        } else {
            echo " Uang Anda Tidak Cukup";
        }
    }
}
if (isset($_POST['set3'])) {
    $uang = 5000;
    $org = $_POST ['org'];
    $byr = $_POST ['byr'];
    $total = $uang*$org;
    echo "Total Tiket Anda ".$total. "<br>";
    if ($total < 20000) {
        if ($byr > $total) {
            $byuu = $byr - $total;
            echo "Kembalian Anda " .$byuu. "<br>";
        }else if ($byr == $total) {
            echo "Uang mu pas";
        } else {
            echo " Uang Anda Tidak Cukup";
        } 
    } else if ($total >= 100000) {
        $dis = $total*(0.15);
        $buy = $total - $dis;
        echo "Setelah di Diskon " .$buy. "<br>";
        if ($byr > $buy) {
            $byuu = $byr - $buy;
            echo "Kembalian Anda " .$byuu. "<br>";
        }else if ($byr == $total) {
            echo "Uang mu pas";
        } else {
            echo " Uang Anda Tidak Cukup";
        }
    } else if ($total >= 20000){
        $dis = $total*(0.05);
        $buy = $total - $dis;
        echo "Setelah di Diskon " .$buy. "<br>";
        if ($byr > $buy) {
            $byuu = $byr - $buy;
            echo "Kembalian Anda " .$byuu. "<br>";
        }else if ($byr == $total) {
            echo "Uang mu pas";
        } else {
            echo " Uang Anda Tidak Cukup";
        }
    }
}
if (isset($_POST['set4'])) {
    $uang = 100000;
    $org = $_POST ['org'];
    $byr = $_POST ['byr'];
    $total = $uang*$org;
    echo "Total Tiket Anda ".$total. "<br>";
    if ($total < 500000) {
        if ($byr > $total) {
            $byuu = $byr - $total;
            echo "Kembalian Anda " .$byuu. "<br>";
        }else if ($byr == $total) {
            echo "Uang Anda Pas";
        } else {
            echo " Uang Anda Tidak Cukup";
        } 
    } else if ($total >= 1000000) {
        $dis = $total*(0.15);
        $buy = $total - $dis;
        echo "Setelah di Diskon " .$buy. "<br>";
        if ($byr > $buy) {
            $byuu = $byr - $buy;
            echo "Kembalian Anda " .$byuu. "<br>";
        }else if ($byr == $total) {
            echo "Uang Anda Pas";
        } else {
            echo " Uang Anda Tidak Cukup";
        }
    } else if ($total >= 500000){
        $dis = $total*(0.05);
        $buy = $total - $dis;
        echo "Setelah di Diskon " .$buy. "<br>";
        if ($byr > $buy) {
            $byuu = $byr - $buy;
            echo "Kembalian Anda " .$byuu. "<br>";
        }else if ($byr == $total) {
            echo "Uang Anda Pas";
        } else {
            echo " Uang Anda Tidak Cukup";
        }
    }
}
if (isset($_POST ['set5'])) {
    $makan =  $_POST['mkn'];
    $porsi = $_POST['prs'];
    $bayar = $_POST['byr'];
    if ($makan == "1" || $makan == "rendang") {
        echo "Rendang Rp.25rb <br>";
        $hrg = 25000;
        $total = $hrg*$porsi;
        echo "Total Harga Rp.".$total."<br>";;
        if ($bayar > $total) {
            $stotal = $bayar - $total;
            echo "Kembalian Anda Rp.".$stotal."<br>";
        } else if ($bayar = $total) {
            echo "Uang Anda PAS";
        } else {
            echo "Uang Anda Kurang";
        }

    } else if ($makan == "2" || $makan == "ayam goreng") {
        echo "Ayam Goreng Rp.30rb <br>";
        $hrg = 30000;
        $total = $hrg*$porsi;
        echo "Total Harga Rp.".$total."<br>";;
        if ($bayar > $total) {
            $stotal = $bayar - $total;
            echo "Kembalian Anda Rp.".$stotal."<br>";
        } else if ($bayar = $total) {
            echo "Uang Anda PAS";
        } else {
            echo "Uang Anda Kurang";
        }

    } else if ($makan == "3" || $makan == "krupuk") {
        echo "Krupuk Rp.5rb <br>";
        $hrg = 5000;
        $total = $hrga*$porsi;
        echo "Total Harga Rp.".$total."<br>";;
        if ($bayar > $total) {
            $stotal = $total - $bayar;
            echo "Kembalian Anda Rp.".$stotal."<br>";
        } else if ($bayar = $total) {
            $stotal = $total - $bayar;
            echo "Uang Anda PAS";
        } else {
            echo "Uang Anda Kurang";
        }

    } else if ($makan == "4" || $makan == "teh") {
        echo "Krupuk Rp.10rb <br>";
        $hrg = 5000;
        $total = $hrga*$porsi;
        echo "Total Harga Rp.".$total."<br>";;
        if ($bayar > $total) {
            $stotal = $bayar - $total;
            echo "Kembalian Anda Rp.".$stotal."<br>";
        } else if ($bayar = $total) {
            echo "Uang Anda PAS";
        } else {
            echo "Uang Anda Kurang";
        }

    } else if ($makan == "5" || $makan == "kopi") {
        echo "Krupuk Rp.5rb <br>";
        $hrg = 7000;
        $total = $hrga*$porsi;
        echo "Total Harga Rp.".$total."<br>";;
        if ($bayar > $total) {
            $stotal = $bayar - $total;
            echo "Kembalian Anda Rp.".$stotal."<br>";
        } else if ($bayar = $total) {
            echo "Uang Anda PAS";
        } else {
            echo "Uang Anda Kurang";
        }

    } else if ($makan == "6" || $makan == "fanta") {
        echo "Krupuk Rp.30rb <br>";
        $hrg = 20000;
        $total = $hrga*$porsi;
        echo "Total Harga Rp.".$total."<br>";;
        if ($bayar > $total) {
            $stotal = $bayar - $total;
            echo "Kembalian Anda Rp.".$stotal."<br>";
        } else if ($bayar = $total) {
            echo "Uang Anda PAS";
        } else {
            echo "Uang Anda Kurang";
        }

    }
}
?>
    </center>  
</body>
</html>



