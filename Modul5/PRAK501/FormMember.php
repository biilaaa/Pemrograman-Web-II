<<?php 
ob_start(); 
require('Model.php');
if (isset($_GET['id_member'])) {
    editmember();
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo (isset($_GET['id_member'])) ? "<title>Edit Member</title>" : "<title>Tambah Member</title>"; ?>
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
        <h2><?php echo isset($_GET['id_member']) ? "Edit Member" : "Tambah Member"; ?></h2>
        <form action="" method="post">
            <table>
                <?php if (isset($_GET['id_member'])): ?>
                    <input type="hidden" name="id_member" value="<?php echo $_GET['id_member']; ?>">
                <?php endif; ?>
                <tr>
                    <td>Nama Member</td>
                    <td>
                        <input type="text" name="Nama" 
                            value="<?php echo isset($_GET['id_member']) && !empty($result) ? htmlspecialchars($result[0]['nama_member']) : ''; ?>" 
                            required>
                    </td>
                </tr>
                <tr>
                    <td>Nomor Member</td>
                    <td>
                        <input type="text" name="nomor" 
                            value="<?php echo isset($_GET['id_member']) && !empty($result) ? htmlspecialchars($result[0]['nomor_member']) : ''; ?>" 
                            required>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <input type="text" name="alamat" 
                            value="<?php echo isset($_GET['id_member']) && !empty($result) ? htmlspecialchars($result[0]['alamat']) : ''; ?>" 
                            required>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Daftar</td>
                    <td>
                        <input type="datetime-local" name="daftar" 
                            value="<?php echo isset($_GET['id_member']) && !empty($result) ? htmlspecialchars($result[0]['tgl_mendaftar']) : ''; ?>" 
                            required>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Bayar Terakhir</td>
                    <td>
                        <input type="date" name="bayar" 
                            value="<?php echo isset($_GET['id_member']) && !empty($result) ? htmlspecialchars($result[0]['tgl_terakhir_bayar']) : ''; ?>" 
                            required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php 
                        if (isset($_GET['id_member'])) {
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
        if (!empty($_POST['Nama']) && !empty($_POST['nomor']) && !empty($_POST['alamat']) && !empty($_POST['daftar']) && !empty($_POST['bayar'])) {
            tambahmember($_POST['Nama'], $_POST['nomor'], $_POST['alamat'], $_POST['daftar'], $_POST['bayar']);
        } else {
            echo "<p>Form tidak lengkap, harap diisi dengan benar.</p>";
        }
    }

    if (isset($_POST['update'])) {
        if (!empty($_POST['id_member']) && !empty($_POST['Nama']) && !empty($_POST['nomor']) && !empty($_POST['alamat']) && !empty($_POST['daftar']) && !empty($_POST['bayar'])) {
            updatemember($_POST['id_member'], $_POST['Nama'], $_POST['nomor'], $_POST['alamat'], $_POST['daftar'], $_POST['bayar']);
        } else {
            echo "<p>Form tidak lengkap, harap diisi dengan benar.</p>";
        }
    }
    ?>
</body>
</html>

<?php
ob_end_flush(); 
?>
