<?php 
require("Koneksi.php");
require("Model.php"); 
$pdo_conn = Koneksi();  
$books = tampilbuku($pdo_conn);
$members = tampilmember($pdo_conn);
$borrowings = tampilpeminjaman($pdo_conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Billa</title>
    <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <style type="text/css">
        * {
            box-sizing: border-box;
        }
        body {
            background-image: url("backindex1.png"); 
            background-size: cover;
            font-family: "forte";
            margin: 0; 
            padding: 0; 
        }
        header {
            text-align: center; 
            background-color: #737373;
        }
        .link_none {
            color: white;
            font-size: 18px;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0; 
            overflow: hidden;
            background-color: #5F9EA0;
            background-repeat: no-repeat;
            padding-left: 16px !important;
            background-size: 4%;
            background-position: 4%;
        }
        li {
            display: inline-block; 
            margin-right: 10px; 
        }
        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 20px 20px;
            text-decoration: none;
        }
        li a:hover {
            background-color: #272727;
        }
        .active {
            background-color: #272727;
        }
        section:after {
            content: "";
            display: table;
            clear: both;
        }
        nav {
            float: left;
            width: 20%;
            padding: 10px;
        }
        article {
            height: 650px;
            width: 100%;
            padding: 10px;
        }
        footer {
            text-align: center;
            color: white;
            padding: 10px;
            padding-left: 0px;
        }
    </style>
</head>
<body>
    <header>
        <div class="active">
            <ul>
                <li><a href="buku.php" class="link_none">Buku</a></li>
                <li><a href="member.php" class="link_none">Member</a></li>
                <li><a href="peminjaman.php" class="link_none">Peminjaman</a></li>
            </ul>
        </div>
    </header>

    <section>
        <article>
            <h2>Daftar Buku</h2>
            <table>
                <tr>
                    <th>ID Buku</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                </tr>
                <?php
                foreach ($books as $book) {
                    echo "<tr>";
                    echo "<td>" . $book['id_buku'] . "</td>";
                    echo "<td>" . $book['judul_buku'] . "</td>";
                    echo "<td>" . $book['penulis'] . "</td>";
                    echo "<td>" . $book['penerbit'] . "</td>";
                    echo "<td>" . $book['tahun_terbit'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
            <h2>Daftar Member</h2>
            <table>
                <tr>
                    <th>ID Member</th>
                    <th>Nama</th>
                    <th>Nomor</th>
                    <th>Alamat</th>
                    <th>Tanggal Mendaftar</th>
                    <th>Tanggal Terakhir Bayar</th>
                </tr>
                <?php
                foreach ($members as $member) {
                    echo "<tr>";
                    echo "<td>" . $member['id_member'] . "</td>";
                    echo "<td>" . $member['nama_member'] . "</td>";
                    echo "<td>" . $member['nomor_member'] . "</td>";
                    echo "<td>" . $member['alamat'] . "</td>";
                    echo "<td>" . $member['tgl_mendaftar'] . "</td>";
                    echo "<td>" . $member['tgl_terakhir_bayar'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
            <h2>Daftar Peminjaman</h2>
            <table>
                <tr>
                    <th>ID Peminjaman</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                </tr>
                <?php
                foreach ($borrowings as $borrowing) {
                    echo "<tr>";
                    echo "<td>" . $borrowing['id_peminjaman'] . "</td>";
                    echo "<td>" . $borrowing['tgl_pinjam'] . "</td>";
                    echo "<td>" . $borrowing['tgl_kembali'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </article>
    </section>

    <footer>
        <p>© 2025 Billa - All Rights Reserved</p>
    </footer>
</body>
</html>