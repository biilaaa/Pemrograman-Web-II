<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #d9e9f8, #9bc6ce);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 15px;
        }

        .form-container {
            background-color: #ffffffee;
            padding: 35px 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 700px;
            transition: box-shadow 0.3s ease;
        }

        .form-container:hover {
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2);
        }

        h3 {
            font-size: 30px;
            color: #2c5d73;
            margin-bottom: 30px;
            text-align: center;
            font-weight: 800;
            letter-spacing: 0.04em;
        }

        .form-label {
            font-weight: 600;
            color: #2c5d73;
        }

        .form-control {
            width: 100%;
            padding: 12px 14px;
            font-size: 16px;
            border-radius: 12px;
            border: 2px solid #a7d0e3;
            margin-bottom: 18px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            border-color: #5ca3dd;
            box-shadow: 0 0 8px #8dbeeaaa;
            outline: none;
        }

        .btn-primary {
            padding: 12px 24px;
            border-radius: 12px;
            background-color: #8dbeea;
            font-weight: 700;
            font-size: 16px;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #3a83ad;
        }

        .btn-secondary {
            padding: 12px 24px;
            border-radius: 12px;
            background-color: #8dbeea;
            font-weight: 600;
            font-size: 16px;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #3a83ad;
        }

        @media (max-width: 576px) {
            .form-container {
                max-width: 95%;
                padding: 25px 20px;
            }

            h3 {
                font-size: 24px;
            }

            .form-control,
            .btn-primary,
            .btn-secondary {
                font-size: 14px;
                padding: 10px 16px;
            }

            .d-flex {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h3><i class="bi bi-pencil-square me-2"></i>Edit Data Buku</h3>

            <?php if (session()->getFlashdata('errors')) : ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('/buku/' . $buku['id'] . '/edit') ?>" method="post">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul"
                        value="<?= old('judul', $buku['judul']) ?>" />
                </div>
                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis"
                        value="<?= old('penulis', $buku['penulis']) ?>" />
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit"
                        value="<?= old('penerbit', $buku['penerbit']) ?>" />
                </div>
                <div class="mb-4">
                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit"
                        value="<?= old('tahun_terbit', $buku['tahun_terbit']) ?>" />
                </div>
                <div class="d-flex justify-content-between">
                    <a href="<?= base_url('/buku') ?>" class="btn btn-secondary">
                        <i class="bi bi-arrow-left-circle me-1"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save2 me-1"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>
</html>