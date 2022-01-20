<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lthn1.css">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Destinasi Wisata</h1>
        <div class="desti">
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
                                <td>Destinasi Kemana? N0 : (1-8) </td>
                                <td><input type= "number" name= "des"></td>
                            </label>
                        </tr>
                        <tr>
                            <td><input type="submit" name="pro" value="Proses"></td>
                        </tr>
                    </form></td>
                </tr>
            </table>
        </div>
        <div class="proses">
            <?php 
if (isset($_POST['pro'])) {
    $desti = $_POST['des'];
    
    if ($desti == 1) {
        echo "TIKET BUKIT BINTANG <br>";
        echo '<td>Berapa Tiket? </td>';
        echo '<td><input type= "number" name= "org"></td>';
        echo '<td><input type="submit" name="torg" value="Tiket"></td>';
    }  
}
if (isset($_POST['torg'])) {
    $org = $_POST['org'];
    $a = 10000;
    if ($a*$org < 50000) {
        echo "Kamu tidak dapat diskon karna tiket kamu tidak sampai 50RB <br>";
        echo "Kamu harus bayar Rp. ".$ab;
    } else if ($a*$org >= 100000) {
        $abb = $ab*(15/100);
        $aa = $ab - $abb;
        echo "Kamu dapat diskon 15% karna tiket kamu lebih dari 50RB <br>";
        echo "Setelah diberi diskon kamu hanya harus membayar Rp. ".$aa;
    } else if ($a*$org >= 50000) {
        $abc = $ab*(5/100);
        $aa = $ab - $abc;
        echo "Kamu dapat diskon 5% karna tiket kamu sampai 50RB <br>";
        echo "Setelah diberi diskon kamu hanya harus membayar Rp. ".$aa;
    }
    echo '<tr><td><input type="number" name="byr" id=""></td></tr> <br>';
    echo '<tr><td><input type="submit" name="bayar"value="BAYAR"></td></tr> <br>';
}