<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Beranda</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to bottom right, #d9e9f8, #9bc6ec);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .card-custom {
      background-color: #edf5fb;
      border: none;
      border-radius: 20px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
      padding: 50px;
      transform: scale(0.5);
      opacity: 0;
      animation: zoomIn 1.5s ease-in-out forwards;
    }

    h1 {
      color: #7fb6e7;
      font-size: 2.5rem;
      font-weight: bold;
      opacity: 0;
      animation: rotateIn 1.5s ease-in-out 0.5s forwards;
    }

    p {
      font-size: 1.50rem;
      opacity: 0;
      animation: fadeIn 1.5s ease-in-out 1s forwards;
    }

    .btn-custom {
      background-color: #8dbeea;
      color: #fff;
      border: none;
      font-size: 1.1rem;
      padding: 10px 25px;
      transition: transform 0.2s ease, background-color 0.3s ease;
      opacity: 0;
      animation: slideIn 1.5s ease-in-out 1.5s forwards;
    }

    .btn-custom:hover {
      background-color: #76b2e0;
      transform: scale(1.05);
    }

    .profile-img {
      width: 230px;
      height: 230px;
      object-fit: cover;
      border-radius: 50%;
      border: 5px solid #8dbeea;
      margin: 30px auto;
      display: block;
      opacity: 0;
      animation: fadeIn 1.5s ease-in-out 1s forwards;
    }

    @keyframes zoomIn {
      0% {
        opacity: 0;
        transform: scale(0.5);
      }
      100% {
        opacity: 1;
        transform: scale(1);
      }
    }

    @keyframes rotateIn {
      0% {
        opacity: 0;
        transform: rotate(-45deg);
      }
      100% {
        opacity: 1;
        transform: rotate(0deg);
      }
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes slideIn {
      0% {
        opacity: 0;
        transform: translateX(-100%);
      }
      100% {
        opacity: 1;
        transform: translateX(0);
      }
    }

  </style>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card card-custom w-100 text-center" style="max-width: 600px;">
      <h1 class="mb-4">Selamat Datang</h1>
      <img src="<?= base_url('assets/b1.jpg') ?>" alt="Foto Profil" class="profile-img">
      <p>👩‍💻 <strong><?= $nama ?></strong></p>
      <p>🎓 <strong><?= $nim ?></strong></p>
      
      <div class="d-flex justify-content-center gap-3 mt-5">
        <a href="<?= site_url() ?>" class="btn btn-custom">🔙 Kembali</a>
        <a href="<?= site_url('profil') ?>" class="btn btn-custom">👤 Lihat Profil</a> 
      </div>
    </div>
  </div>
</body>
</html>