<?php
require('Model.php');
if (isset($_GET['id_buku'])) {
    hapusbuku($_GET['id_buku']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku - Billa Library</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #d9e9f8;
        }
        ul {
            list-style-type: none;
            overflow: hidden;
            background-color: #9bc6ec; 
            padding-left: 0; 
            text-align: center; 
        }
        li {
            display: inline-block; 
        }
        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 15px 20px;
            text-decoration: none;
            border-radius: 30px; 
            transition: background-color 0.3s ease;
        }
        li a:hover, .active {
            background-color: #78b3e6;
        }
        header {
            padding: 5px 0;
            background-color: #9bc6ec; 
            text-align: center;
            color: white;
        }
        .container {
            margin: 40px auto;
            max-width: 960px;
        }
        button {
            padding: 10px 15px;
            border: none;
            border-radius: 30px;
            background-color: #9bc6ec; 
            color: white;
            font-weight: bold;
            transition: 0.3s ease;
        }
        button:hover {
            background-color: #78b3e6; 
        }
        .table-background {
            background-color: #f4f9fd;
            padding: 10px 30px;
            border-radius: 30px;
            position: relative;
            margin: 30px auto;
            width: 100%;  
            max-width: 100%;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        }
        table {
            background-color: #d8e9f7;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            width: auto;
            max-width: 100%;
            table-layout: auto;
            margin: 0;
            border-collapse: collapse;
        }
        table td, table th {
            white-space: nowrap;
        }
        .link_none {
            background-color: #9bc6ec;
            color: white;
            padding: 6px 12px;
            border: none;
            border-radius: 30px;
            margin-right: 10px;
        }
        .link_none a {
            color: white;
            text-decoration: none;
        }
        .action-btn {
            margin-right: 10px;
            display: inline-block;
        }
    </style>
</head>

<body>
<header>
    <h1 style="font-family: 'Copperplate', 'Copperplate Gothic Light', serif;">Billa Library</h1>
    <ul>
        <li><a href="Buku.php" class="active">Buku</a></li>
        <li><a href="Member.php">Member</a></li>
        <li><a href="Peminjaman.php">Peminjaman</a></li>
    </ul>
</header>
<div class="container">
    <h2 class="text-center">Daftar Buku</h2>

    <div class="table-background">
        <div class="table-wrapper">
            <table class="table table-bordered table-striped mt-4">
                <tbody>
                <?php
                    tampilbuku();
                ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="FormBuku.php"><button>Tambah Buku</button></a>
    </div>
</div>
</body>
</html>