<html>
    <head>    
        <title>PRAK401</title>     
        <style>         
            table {
                border-collapse: collapse;
            }         
            td {
                border: 1px solid;             
                width: 50px;             
                height: 50px;         
                text-align: center;
            }
        </style> 
    </head>
    <body>     
        <?php         
            $panjang = $lebar = $nilai = "";         
            if (isset($_POST['cetak'])) {             
                if (isset($_POST['panjang'])) {                 
                    $panjang = $_POST['panjang'];             
                }             
                if (isset($_POST['lebar'])) {                 
                    $lebar = $_POST['lebar'];             
                }             
                if (isset($_POST['nilai'])) {                 
                    $nilai = (string)$_POST['nilai']; 
                }         
            }     
        ?>
        <form action="" method="post">         
            Panjang : <input type="text" name="panjang" value="<?= htmlspecialchars($panjang) ?>"><br>         
            Lebar : <input type="text" name="lebar" value="<?= htmlspecialchars($lebar) ?>"><br>          
            Nilai : <input type="text" name="nilai" value="<?= htmlspecialchars($nilai) ?>"><br>         
            <input type="submit" name="cetak" value="Cetak">     
        </form>     
        <br>     
        <?php         
            if (isset($_POST['cetak'])) {
                $a = explode(" ", $nilai);     
                if ($panjang * $lebar < count($a)) {                         
                    echo "Panjang nilai tidak sesuai dengan ukuran matriks";             
                } else { 
        ?>             
                    <table>             
                        <?php                 
                            for ($i = 0; $i < $panjang; $i++) {                     
                        ?>
                        <tr>                        
                            <?php for ($j = 0; $j < $lebar; $j++) { ?>                            
                                <td>                             
                                    <?php                             
                                        if (empty($a[($i * $lebar) + $j])) {         
                                            echo 0;                             
                                        } else {                                
                                            echo htmlspecialchars($a[($i * $lebar) + $j]);                             
                                        }                              
                                    ?>                         
                                </td>                        
                            <?php } ?>                     
                        </tr>                  
                        <?php } ?>         
                    </table>  
        <?php
                }     
            }     
        ?> 
    </body> 
</html>
