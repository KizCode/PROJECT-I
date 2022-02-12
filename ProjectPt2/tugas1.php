
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <table border = 1 cellspacing = 1>
    <?php

    $judul = ["Judul" => "Data Siswa Kelas XI RPL"];
    echo "<h2>".$judul["Judul"]."</h2>";
    
    $index = [
        ["NIS", "Nama", "Kelas", "Bahasa Indonesia", "Bahasa Inggris", "Matematika", "Produktif", "Total Nilai", "Rata-rata", "Status"],
        ["1018", "Berli", "XI RPL 1", 95, 80, 78, 78, 331, 82.75, "Lulus"]
    ];
    
    for ($row = 0; $row < 2; $row++) {
        echo "<tr>";
        for ($col = 0; $col < 9; $col++) {
            echo "<td>".$index[$row][$col]."</td>";
             
        }
        echo "</tr>";
    } 
    ?>
    
        </table>
        
    </center>
    
</body>
</html>


