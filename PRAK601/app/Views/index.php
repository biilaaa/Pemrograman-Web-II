<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Router</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    body {
      background: linear-gradient(to bottom right, #d9e9f8, #9bc6ec);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .card-router {
      background-color: #edf5fb;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
      padding: 60px 80px;
      text-align: center;
      width: 100%;
      max-width: 700px;
      opacity: 0;
      animation: fadeIn 1.5s ease-in-out forwards;
    }

    h1 {
      color: #7fb6e7;
      font-size: 3rem;
      margin-bottom: 25px;
      opacity: 0;
      animation: fadeInText 1.5s ease-in-out 0.5s forwards;
    }

    p {
      font-size: 1.5rem;
      color: #444;
      margin-bottom: 40px;
      opacity: 0;
      animation: fadeInText 1.5s ease-in-out 1s forwards;
    }

    .btn-custom {
      padding: 14px 36px;
      font-size: 1.2rem;
      border-radius: 10px;
      text-decoration: none;
      transition: transform 0.2s ease, background-color 0.3s ease;
      opacity: 0;
      animation: fadeInButton 1.5s ease-in-out 1.5s forwards;
    }

    .btn-custom:hover {
      transform: scale(1.05);
    }

    .btn-beranda {
      background-color: #8dbeea;
      color: white;
      margin-right: 10px;
    }

    .btn-beranda:hover {
      background-color: #76b2e0;
    }

    .btn-profil {
      background-color: #8dbeea;
      color: white;
    }

    .btn-profil:hover {
      background-color: #76b2e0;
    }

    @keyframes fadeIn {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInText {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInButton {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 768px) {
      .card-router {
        padding: 40px;
      }

      h1 {
        font-size: 2rem;
      }

      p {
        font-size: 1.2rem;
      }

      .btn-custom {
        width: 100%;
        margin-bottom: 10px;
      }
    }
  </style>
</head>
<body>
  <div class="card-router">
    <h1>👋 Selamat Datang!</h1>
    <p>Silakan pilih halaman yang ingin Kamu kunjungi</p>
    <a href="<?= site_url('beranda') ?>" class="btn btn-custom btn-beranda m-2">
      🏠 Beranda</a>
    <a href="<?= site_url('profil') ?>" class="btn btn-custom btn-profil m-2">
      🙋‍♀️ Profil</a>
  </div>
</body>
</html>