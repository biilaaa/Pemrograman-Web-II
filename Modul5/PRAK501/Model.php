<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PRAK501</title>
    <style>
    body {
        text-align: center;
    }
    a:link {
            color: white;
            text-decoration: none;
        }

    a:active {
        color: white;
        text-decoration: none;
        }

    a:visited {
        color: white;
        text-decoration: none;
    }
    p {
		text-align: center;
	}
    </style>
</head>
<body>
<?php
require("Koneksi.php");

function tampilbuku()
{
    $stmt = koneksi()->prepare("SELECT * FROM buku");
    $stmt->execute();
    $result = $stmt->fetchAll();
    if(!empty($result)){
        echo "<table class='table'>";
        echo "<thead><tr><th>ID Buku</th><th>Judul</th><th>Penulis</th><th>Penerbit</th><th>Tahun Terbit</th><th>Aksi</th></tr></thead><tbody>";
        foreach ($result as $buku) {
            echo "<tr>";
            echo "<td><p>". $buku['id_buku']."</p></td>";
            echo "<td><p>". $buku['judul_buku']."</p></td>";
            echo "<td><p>". $buku['penulis']."</p></td>";
            echo "<td><p>". $buku['penerbit']."</p></td>";
            echo "<td><p>". $buku['tahun_terbit']."</p></td>";
            echo "<td>"."<button class=link_none> <a href = 'formbuku.php?id_buku=".$buku['id_buku']."'>Edit</a> </button>";
            echo "<button class=link_none><a href='buku.php?id_buku=" . $buku['id_buku'] . "' onclick=\"return confirm('Anda yakin ingin menghapusnya?')\">Hapus</a> </button></td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
    }
}

function tambahBuku($id, $judul, $penulis, $penerbit, $tahun)
{
    $sql = "INSERT INTO buku (id_buku, judul_buku, penulis, penerbit, tahun_terbit) VALUES (:id_b, :judul_b, :penulis, :penerbit, :tahun)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':id_b' => $id, ':judul_b' => $judul, ':penulis' => $penulis, ':penerbit' => $penerbit, ':tahun' => $tahun));
    if ($result) {
        header('Location: Buku.php');
        exit; 
    }
}

function editbuku()
{
    if(isset($_GET['id_buku'])){
        $stmt = koneksi()->prepare("SELECT * FROM buku WHERE id_buku = :id_buku");
        $stmt->execute(array(':id_buku' => $_GET['id_buku']));
        $GLOBALS['result'] = $stmt->fetchAll();
    }
}

function updatebuku($id, $judul, $penulis, $penerbit, $tahun)
{
    $sql = "UPDATE buku SET judul_buku = :judul, penulis = :penulis, penerbit = :penerbit, tahun_terbit = :tahun WHERE id_buku = :id_b";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':id_b' => $id, ':judul' => $judul, ':penulis' => $penulis, ':penerbit' => $penerbit, ':tahun' => $tahun));
    if ($result) {
        header('Location: Buku.php');
        exit;
    }
}

function hapusbuku($id_buku)
{
    if(isset($id_buku)){
        $stmt = koneksi()->prepare("DELETE FROM buku WHERE id_buku = :id_buku");
        $result = $stmt->execute(array(':id_buku' => $id_buku));
        if ($result) {
            header('Location: Buku.php');
            exit;
        }
    }
}

function tampilmember()
{
    $stmt = koneksi()->prepare("SELECT * FROM member");
    $stmt->execute();
    $result = $stmt->fetchAll();
    if (!empty($result)) {
        echo "<table class='table'>";
        echo "<thead><tr><th>ID Member</th><th>Nama</th><th>Nomor</th><th>Alamat</th><th>Tanggal Mendaftar</th><th>Tanggal Bayar</th><th>Aksi</th></tr></thead><tbody>";
        foreach ($result as $member) {
            echo "<tr>";
            echo "<td><p>". $member['id_member']."</p></td>";
            echo "<td><p>". $member['nama_member']."</p></td>";
            echo "<td><p>". $member['nomor_member']."</p></td>";
            echo "<td><p>". $member['alamat']."</p></td>";
            echo "<td><p>". $member['tgl_mendaftar']."</p></td>";
            echo "<td><p>". $member['tgl_terakhir_bayar']."</p></td>";
            echo "<td><button class=link_none><a href = 'formmember.php?id_member=".$member['id_member']."'>Edit</a></button>";
            echo "<button class=link_none><a href='member.php?id_member=" . $member['id_member'] . "' onclick=\"return confirm('Lanjut Hapus ?')\">Hapus</a></button></td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
    }
}

function tambahmember($nama, $nomor, $alamat, $tgldaftar, $tglbayar)
{
    $sql = "INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) 
            VALUES (:nama_m, :no_m, :alamat, :tgl_daf, :tgl_bay)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(
        ':nama_m' => $nama,
        ':no_m' => $nomor,
        ':alamat' => $alamat,
        ':tgl_daf' => $tgldaftar,
        ':tgl_bay' => $tglbayar
    ));
    if ($result) {
        header('Location: Member.php');
        exit;
    }
}

function editmember()
{
    $stmt = koneksi()->prepare("SELECT * FROM member WHERE id_member = :id_member");
    $stmt->execute(array(':id_member' => $_GET['id_member']));
    $result = $stmt->fetchAll();
    if ($result) {
        $GLOBALS['result'] = $result;
    } else {
        echo "Member tidak ditemukan.";
    }
}

function updatemember($id, $nama, $no, $alamat, $tgldaftar, $tglbayar)
{
    $sql = "UPDATE member SET nama_member = :nama, nomor_member = :no, alamat = :alamat, tgl_mendaftar = :tgldaftar, tgl_terakhir_bayar = :tglbayar WHERE id_member = :id";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':id' => $id, ':nama' => $nama, ':no' => $no, ':alamat' => $alamat, ':tgldaftar' => $tgldaftar, ':tglbayar' => $tglbayar));
    if ($result) {
        header('Location: Member.php');
        exit;
    }
}

function hapusmember($id_member)
{
    $stmt = koneksi()->prepare("DELETE FROM member WHERE id_member = :id_member");
    $result = $stmt->execute(array(':id_member' => $id_member));
    if ($result) {
        header('Location: Member.php');
        exit;
    }
}

function tampilpeminjaman()
{
    $stmt = koneksi()->prepare("SELECT * FROM peminjaman");
    $stmt->execute();
    $result = $stmt->fetchAll();

    if (!empty($result)) {
        foreach ($result as $peminjaman) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($peminjaman['id_peminjaman']) . "</td>";
            echo "<td>" . htmlspecialchars($peminjaman['tgl_pinjam']) . "</td>";
            echo "<td>" . htmlspecialchars($peminjaman['tgl_kembali']) . "</td>";
            echo "<td style='white-space: nowrap;'>
                    <a href='FormPeminjaman.php?id_peminjaman={$peminjaman['id_peminjaman']}' class='btn-custom'>Edit</a>
                    <a href='Peminjaman.php?id_peminjaman={$peminjaman['id_peminjaman']}' onclick=\"return confirm('Lanjut hapus?')\" class='btn-custom'>Hapus</a>
                  </td>";
            echo "</tr>";
        }
    }
}

function tambahpeminjaman($tglpinjam, $tglbalik)
{
    $sql = "INSERT INTO peminjaman (tgl_pinjam, tgl_kembali) 
            VALUES (:tgl_pinjam, :tgl_balik)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':tgl_pinjam' => $tglpinjam, ':tgl_balik' => $tglbalik));
    if ($result) {
        header('Location: Peminjaman.php');
        exit;
    }
}

function editpeminjaman()
{
    $stmt = koneksi()->prepare("SELECT * FROM peminjaman WHERE id_peminjaman = :id_peminjaman");
    $stmt->execute(array(':id_peminjaman' => $_GET['id_peminjaman']));
    $GLOBALS['result'] = $stmt->fetchAll();
}

function updatepeminjaman($id, $tglpinjam, $tglbalik)
{
    $sql = "UPDATE peminjaman SET tgl_pinjam = :tglpinjam, tgl_kembali = :tglbalik WHERE id_peminjaman = :id";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':id' => $id, ':tglpinjam' => $tglpinjam, ':tglbalik' => $tglbalik));
    if ($result) {
        header('Location: Peminjaman.php');
        exit;
    }
}

function hapuspeminjaman($id_peminjaman)
{
    $stmt = koneksi()->prepare("DELETE FROM peminjaman WHERE id_peminjaman = :id_peminjaman");
    $result = $stmt->execute(array(':id_peminjaman' => $id_peminjaman));
    if ($result) {
        header('Location: Peminjaman.php');
        exit;
    }
}
?>
</body>
</html>