<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #d9e9f8, #9bc6ce);
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 25px;
            background-color: #ffffffdd;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(45, 105, 130, 0.15);
        }

        h1.judul {
            font-size: 32px;
            color: #2c5d73;
            font-weight: 700;
            margin-bottom: 25px;
            text-align: center;
            line-height: 1.4;
        }

        p {
            font-size: 16px;
            color: #3e606f;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 10px 18px;
            border-radius: 10px;
            text-decoration: none;
            color: #fff;
            border: none;
            cursor: pointer;
            font-weight: 600;
            font-size: 15px;
            transition: background-color 0.3s ease;
        }

        .btn-danger {
            background-color: #8dbeea;
        }

        .btn-danger:hover {
            background-color: #5a96c7;
        }

        .btn-info {
            background-color: #8dbeea;
        }

        .btn-info:hover {
            background-color: #5a96c7;
        }

        .btn-warning {
            background-color: #8dbeea;
            color: #fff;
        }

        .btn-warning:hover {
            background-color: #5a96c7;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 8px;
            margin-top: 15px;
            font-size: 16px;
            color: #9bc6ec;
            text-align: center;
        }

        thead tr {
            background-color: #8dbeea;
            color: white;
            font-weight: 700;
        }

        thead th {
            padding: 14px 15px;
            text-align: center;
            background-color: #8dbeea;
        }

        tbody tr {
            background-color: #d3e6f5;
            box-shadow: 0 2px 5px rgb(0 0 0 / 0.05);
            transition: background-color 0.25s ease;
        }

        tbody tr:hover {
            background-color: #b6d6f1;
        }

        tbody td {
            padding: 14px 15px;
            vertical-align: middle;
            text-align: center;
            background-color: #f7fbfd;
        }

        tbody td:last-child {
            white-space: nowrap;
        }

        thead tr:first-child th:first-child {
            border-top-left-radius: 12px;
        }

        thead tr:first-child th:last-child {
            border-top-right-radius: 12px;
        }

        tbody tr:last-child td:first-child {
            border-bottom-left-radius: 12px;
        }

        tbody tr:last-child td:last-child {
            border-bottom-right-radius: 12px;
        }

        .table-actions form {
            display: inline-block;
            margin: 0;
        }

        .footer-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 30px;
        }

        @media (max-width: 576px) {
            .container {
                padding: 15px;
            }

            h1.judul {
                font-size: 24px;
            }

            p {
                font-size: 14px;
            }

            .btn {
                font-size: 13px;
                padding: 8px 14px;
            }

            table {
                font-size: 13px;
            }

            thead th,
            tbody td {
                padding: 10px 8px;
            }

            .footer-actions {
                flex-direction: column;
                gap: 12px;
                align-items: stretch;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="judul">👋Halo👋<br>📚Selamat Datang di Perpustakaan Billa📚</h1>

        <h2 style="text-align: center; margin-bottom: 20px; font-weight: 700; color: #2c5d73;">
            🕮 Daftar Buku 🕮 </h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($buku as $key => $value) : ?>
                    <tr>
                        <td><?= $value['judul'] ?></td>
                        <td><?= $value['penulis'] ?></td>
                        <td><?= $value['penerbit'] ?></td>
                        <td><?= $value['tahun_terbit'] ?></td>
                        <td class="table-actions">
                            <a href="<?= base_url('/buku/' . $value['id'] . '/edit') ?>" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil-square me-1"></i> Edit
                            </a>
                            <form action="<?= base_url('/buku/' . $value['id'] . '/delete') ?>" method="POST"
                                onsubmit="return confirm('Apakah kamu yakin ingin menghapus data ini?')" style="display:inline-block;">
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash me-1"></i> Hapus
                                    </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="footer-actions">
            <a class="btn btn-info" href="<?= base_url('/buku/create') ?>">
                <i class="bi bi-plus-circle me-1"></i> Tambah Buku
            </a>
            <a href="<?= base_url('logout') ?>" class="btn btn-danger">
                <i class="bi bi-box-arrow-right me-1"></i> Logout
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>
</html>