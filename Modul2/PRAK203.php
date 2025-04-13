<?php
$hasil;
$derajatSuhu;

if (isset($_POST["konversi"])) {
        $nilaiFloat = $_POST["nilai"];
        if( $_POST["suhu"] == "Celcius" ) {
            if( $_POST["suhuKonversi"] == "Celcius" ) {
                $hasil = $nilaiFloat;
                $derajatSuhu = "C";
            } else if( $_POST["suhuKonversi"] == "Fahrenheit" ) {
                $hasil = ($nilaiFloat * (9/5)) + 32;
                $derajatSuhu = "F";
            } else if( $_POST["suhuKonversi"] == "Rheamur" ) {
                $hasil = ($nilaiFloat * (4/5));
                $derajatSuhu = "R";
            } else if( $_POST["suhuKonversi"] == "Kelvin" ) {
                $hasil = ($nilaiFloat + 273.15);
                $derajatSuhu = "K";
            }
        } else if ( $_POST["suhu"] == "Fahrenheit" ) {
            if( $_POST["suhuKonversi"] == "Celcius" ) {
                $hasil = ($nilaiFloat - 32) * (5/9);
                $derajatSuhu = "C";
            } else if( $_POST["suhuKonversi"] == "Fahrenheit" ) {
                $hasil = $nilaiFloat;
                $derajatSuhu = "F";
            } else if( $_POST["suhuKonversi"] == "Rheamur" ) {
                $hasil = ((4/9) * ($nilaiFloat - 32));
                $derajatSuhu = "R";
            } else if( $_POST["suhuKonversi"] == "Kelvin" ) {
                $hasil = (($nilaiFloat + 459.67) * (5/9));
                $derajatSuhu = "K";
            }          
        } else if ( $_POST["suhu"] == "Rheamur" ) {
            if( $_POST["suhuKonversi"] == "Celcius" ) {
                $hasil = ($nilaiFloat / 0.8);
                $derajatSuhu = "C";
            } else if( $_POST["suhuKonversi"] == "Fahrenheit" ) {
                $hasil = (($nilaiFloat * 2.25) + 32);
                $derajatSuhu = "F";
            } else if( $_POST["suhuKonversi"] == "Rheamur" ) {
                $hasil = $nilaiFloat;
                $derajatSuhu = "R";
            } else if( $_POST["suhuKonversi"] == "Kelvin" ) {
                $hasil = (($nilaiFloat / 0.8) + 273.15);
                $derajatSuhu = "K";
            }
        } else if ( $_POST["suhu"] == "Kelvin" ) {
            if( $_POST["suhuKonversi"] == "Celcius" ) {
                $hasil = ($nilaiFloat - 273.15);
                $derajatSuhu = "C";
            } else if( $_POST["suhuKonversi"] == "Fahrenheit" ) {
                $hasil = ($nilaiFloat * (9/5) - 459.67);
                $derajatSuhu = "F";
            } else if( $_POST["suhuKonversi"] == "Rheamur" ) {
                $hasil = ((4/5) * ($nilaiFloat - 273));
                $derajatSuhu = "R";
            } else if( $_POST["suhuKonversi"] == "Kelvin" ) {
                $hasil = $nilaiFloat;
                $derajatSuhu = "K";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK203</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nilai : <input type="text" name="nilai" id="nilai"></td>
            </tr>
            <tr> 
                <td>Dari :</td>
            </tr>
            <tr>
                <td><input type="radio" name="suhu" value="Celcius">Celcius</td>
            </tr>
            <tr>
                <td><input type="radio" name="suhu" value="Fahrenheit">Fahrenheit</td>
            </tr>
            <tr>
                <td><input type="radio" name="suhu" value="Rheamur">Rheamur</td>
            </tr>
            <tr>
                <td><input type="radio" name="suhu" value="Kelvin">Kelvin</td>
            </tr>
        </table>
        <table>
            <tr>
                <td>Ke :</td>
            </tr>
            <tr>
                <td><input type="radio" name="suhuKonversi" value="Celcius">Celcius</td>
            </tr>
            <tr>
                <td><input type="radio" name="suhuKonversi" value="Fahrenheit">Fahrenheit</td>
            </tr>
            <tr>
                <td><input type="radio" name="suhuKonversi" value="Rheamur">Rheamur</td>
            </tr>
            <tr>
                <td><input type="radio" name="suhuKonversi" value="Kelvin">Kelvin</td>
            </tr>
            <tr>
                <td><button type="submit" name="konversi">Konversi</button></td>
            </tr>
        </table>
        <?php if( isset($_POST["konversi"]) ) : ?>
            <table>
                <tr>
                    <td><h1>Hasil Konversi : <?= number_format($hasil, 1) ?>°<?= $derajatSuhu; ?></h1></td>
                </tr>
            </table>
        <?php endif ?>
    </form>
</body>
</html>
