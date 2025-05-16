<?php
require('Model.php');
$id_peminjaman = isset($_GET['id_peminjaman']) ? $_GET['id_peminjaman'] : null;
if ($id_peminjaman) {
    editpeminjaman();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $id_peminjaman ? "Edit Peminjaman" : "Tambah Peminjaman"; ?></title>
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
        input[type="date"] {
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
        <h2><?php echo $id_peminjaman ? "Edit Peminjaman" : "Tambah Peminjaman"; ?></h2>
        <form action="" method="post">
            <table>
                <?php if ($id_peminjaman): ?>
                    <input type="hidden" name="id_peminjaman" value="<?php echo $id_peminjaman; ?>">
                <?php endif; ?>
                <tr>
                    <td>Tanggal Peminjaman</td>
                    <td>
                        <input type="date" name="pinjam" 
                               value="<?php echo isset($result[0]['tgl_peminjaman']) ? htmlspecialchars($result[0]['tgl_peminjaman']) : ''; ?>" 
                               required>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Kembalian</td>
                    <td>
                        <input type="date" name="kembali" 
                               value="<?php echo isset($result[0]['tgl_kembali']) ? htmlspecialchars($result[0]['tgl_kembali']) : ''; ?>" 
                               required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" name="<?php echo $id_peminjaman ? 'update' : 'submit'; ?>">
                            <?php echo $id_peminjaman ? 'Edit' : 'Tambah'; ?>
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        tambahpeminjaman($_POST['pinjam'], $_POST['kembali']);
    }

    if (isset($_POST['update'])) {
        updatepeminjaman($_POST['id_peminjaman'], $_POST['pinjam'], $_POST['kembali']);
    }
    ?>
</body>
</html>
<?php
ob_end_flush(); 
?>