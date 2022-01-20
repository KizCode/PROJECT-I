<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="lf2.css">
</head>
<body>
    <div class="pemilihan">
        <form action="" method="post">
        <h1 align ="center">Daftar Program</h1>
        <table cellspacing ="15" align ="center">
        <tr>
            <th></th>
            <th>No</th>
            <th>Daftar Program</th>
        </tr>
        <tr>
            <td></td>
            <td>1.</td>
            <td>Program Pengulangan Kelipatan 2</td>
        </tr>
        <tr>
            <td></td>
            <td>2.</td>
            <td>Program Pengulangan Kelipatan 5 x 5</td>
        </tr>
        <tr>
            <td></td>
            <td>3.</td>
            <td>Program Ganjil Genap</td>
        </tr>
        <tr>
            <td></td>
            <td>4.</td>
            <td>Program Pengulangan Kuadrat</td>
        </tr>
            <tr>
                <td>Pilih Program</td>
                <td>:</td>
                <td><input type="text" name="pilih"></td>
            </tr>
            <tr>
                <td>Masukan Angka</td>
                <td>:</td>
                <td><input type="number" name="angka"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="SET"></td>
            </tr>
        </table>
    </div>
    <div class="gabuts">
    <?php
    if(isset($_POST['submit'])){
        $pilih = $_POST['pilih'];
        $angka = $_POST['angka'];
        echo "<br>";
        if($pilih == "1" || $pilih == "Pengulangan Kelipatan 2"){
            echo "Program Pengulangan Kelipatan 2<br>";
            for($i = 2; $i <= $angka; $i+=2){
                echo $i." ";
            }
        }else if($pilih == "2" || $pilih == "Pengulangan Kelipatan 5 x 5"){
            echo "Program Pengulangan Kelipatan 5 x 5<br>";
            for($i = 5; $i <= $angka; $i+=5){
                $hasil = $i * 5;
                echo "$i x 5 = $hasil<br>";
                
            }
        }else if($pilih == "3" || $pilih == "Ganjil Genap"){
            echo "Program Ganjil Genap<br>";
            for($bil = 1; $bil <= $angka; $bil++){
                if( ($bil % 2) == 0){
                    echo "$bil Adalah Bilangan Genap<br>";
                }else {
                    echo "$bil Adalah Bilangan Ganjil<br>";
                }
            }
        }else if($pilih == "4" ||$pilih == "Pengulangan Kuadrat" ){
            echo "Program Pengulangan Kuadrat<br>";
            for ($i=1; $i <= $angka ; $i++) { 
                $hasil = $i * $i;
                echo "$i x $i = $hasil<br>";
            }
        } else {
            echo "Pilihan Anda Tidak Ada";
        }
    }
    ?>
    </div>
    </form>
    <center>
    </center>
</body>
</html>