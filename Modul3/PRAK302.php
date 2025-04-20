<?php
$jumlah = "";
$alamat = "";
$max = 0;
if (isset($_POST['submit'])) {
    $jumlah = $_POST['jumlah'];
    $alamat = $_POST['alamat'];
    $max = $jumlah;
}
?>
<html>
<head>
    <title>PRAK302</title>
</head>
<body>
    <form action="" method="post">
        <label for="jumlah">Tinggi :</label>
        <input type="text" name="jumlah" value="<?= htmlspecialchars($jumlah); ?>"> <br>
        <label for="alamat">Alamat Gambar :</label>
        <input type="text" name="alamat" value="<?= htmlspecialchars($alamat); ?>"> <br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <br>
    <?php if (isset($_POST['submit'])) : ?>
        <?php
            $i = 1;
            while ($i <= $max) {
                $j = 1;
                $k = $max;
        ?>
            <?php while ($j < $i) { ?>
                <img style="width: 25px; opacity: 0;" src="<?= $alamat; ?>" alt="">
                <?php $j++; ?>
            <?php } ?>
            <?php while ($k >= $i) { ?>
                <img style="width : 25px" src="<?= $alamat; ?>" alt="">
                <?php $k--; ?>
            <?php } ?>
            <br>
        <?php
            $i++;
        }
        ?>
    <?php endif; ?>
</body>
</html>