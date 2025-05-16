<?php require('Model.php');
if (isset($_GET['id_buku'])) {
    editbuku();
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo (isset($_GET['id_buku'])) ? "<title>Edit Buku</title>" : "<title>Tambah Buku</title>"; ?>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #d9e9f8;
        }
        .form-container {
            background-color: #f4f9fd;
            padding: 30px;
            border-radius: 30px;
            margin: 50px auto;
            width: 90%;
            max-width: 500px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #3a3a3a;
        }
        form table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 15px;
        }
        td {
            padding: 5px;
        }
        input[type="text"], input[type="date"], input[type="datetime-local"] {
            width: 100%;
            padding: 10px;
            border-radius: 15px;
            border: 1px solid #ccc;
            background-color: #ffffff;
        }
        button {
            padding: 12px 25px;
            border: none;
            border-radius: 30px;
            background-color: #9bc6ec;
            color: white;
            font-weight: bold;
            transition: all 0.3s ease;
            width: 100%;
        }
        button:hover {
            background-color: #78b3e6;
            box-shadow: 0 0 12px rgba(255, 255, 255, 0.7);
            transform: scale(1.05);
        }
        button:active {
            background-color: #4a9bd2;
            transform: scale(0.98);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2><?php echo isset($_GET['id_buku']) ? "Edit Buku" : "Tambah Buku"; ?></h2>
        <form action="" method="post">
            <table>
                <?php if (isset($_GET['id_buku'])): ?>
                    <input type="hidden" name="id_buku" value="<?php echo $_GET['id_buku']; ?>">
                <?php endif; ?>
                <tr>
                    <td>Judul Buku</td>
                    <td><input type="text" name="judul" value="<?php echo isset($_GET['id_buku']) ? htmlspecialchars($result[0]['judul_buku']) : ''; ?>" required></td>
                </tr>
                <tr>
                    <td>Nama Penulis</td>
                    <td><input type="text" name="penulis" value="<?php echo isset($_GET['id_buku']) ? htmlspecialchars($result[0]['penulis']) : ''; ?>" required></td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td><input type="text" name="penerbit" value="<?php echo isset($_GET['id_buku']) ? htmlspecialchars($result[0]['penerbit']) : ''; ?>" required></td>
                </tr>
                <tr>
                    <td>Tahun Terbit</td>
                    <td><input type="text" name="thnterbit" value="<?php echo isset($_GET['id_buku']) ? htmlspecialchars($result[0]['tahun_terbit']) : ''; ?>" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php 
                        if (isset($_GET['id_buku'])) {
                            echo "<button type='submit' name='update'>Edit</button>";
                        } else {
                            echo "<button type='submit' name='submit'>Tambah</button>";
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        tambahbuku($_POST['id_buku'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thnterbit']);
    }
    if (isset($_POST['update'])) {
        updatebuku($_GET['id_buku'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thnterbit']);
    }
    ?>
</body>
</html>