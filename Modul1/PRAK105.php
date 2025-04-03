<?php 

//array
$daftarHP = array("S22" => "Samsung Galaxy S22", "S22+" => "Samsung Galaxy S22+", "A03" => "Samsung Galaxy A03", "Xcover5" => "Samsung Galaxy Xcover 5"); 
?> 

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Modul 1</title> 
    <style> 
        table { 
            color: black; 
        } 
        table, th, td { 
            border: 1px solid; 
        } 
        th { 
            background-color: red; 
            font-size: 28px; 
            padding: 20px 0px; 
        } 
    </style>
</head> 
<body> 
    <table> 
        <tr> 
            <th>Daftar Smartphone Samsung</th> 
        </tr> 
        <tr> 
            <td><?= $daftarHP["S22"] ?></td> 
        </tr> 
        <tr> 
            <td><?= $daftarHP["S22+"] ?></td> 
        </tr> 
        <tr> 
            <td><?= $daftarHP["A03"] ?></td> 
        </tr> 
        <tr> 
            <td><?= $daftarHP["Xcover5"] ?></td> 
        </tr> 
    </table> 
</body> 
</html> 