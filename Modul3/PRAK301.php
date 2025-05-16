<?php
$i = 1;
$jumlah = ""; 
if (isset($_POST['submit'])) {
    $jumlah = $_POST['jumlah'];
}
?>
<html>
<head>
    <title>PRAK301</title>
</head>
<body>
    <form action="" method="post">
        <label for="jumlah">Jumlah Peserta :</label>
        <input type="text" name="jumlah" value="<?= htmlspecialchars($jumlah); ?>"> </br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <?php if (isset($_POST['submit'])) : ?>
        <?php while ($i <= $_POST['jumlah']) { ?>
            <?php if ($i % 2 == 1) { ?>
                <h2 style="color: red">Peserta ke-<?= $i; ?></h2>
            <?php } else { ?>
                <h2 style="color: green">Peserta ke-<?= $i; ?></h2>
            <?php } ?>
            <?php $i++; ?>
        <?php } ?>
    <?php endif; ?>
</body>
</html>