<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profil Mahasiswa</title>
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

    .card-custom {
      background-color: #edf5fb;
      border-radius: 20px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
      padding: 50px 80px;
      width: 100%;
      max-width: 1000px;
      animation: zoomIn 1.5s ease-in-out forwards;
      opacity: 0;
    }

    h2 {
      color: #7fb6e7;
      font-size: 3rem;
      font-weight: bold;
      text-align: center;
      margin-bottom: 40px;
      animation: rotateIn 1.5s ease-in-out 0.5s forwards;
      opacity: 0;
    }

    .profile-container {
      display: flex;
      gap: 50px;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
    }

    .profile-img {
      width: 250px;
      height: 250px;
      object-fit: cover;
      border-radius: 50%;
      border: 6px solid #8dbeea;
      animation: fadeIn 1.5s ease-in-out 1s forwards;
      opacity: 0;
    }

    .profile-info {
      text-align: left;
      font-size: 20px;
      flex: 1;
      min-width: 250px;
    }

    .info-row {
      display: flex;
      margin-bottom: 14px;
    }

    .info-row label {
      width: 160px;
      font-weight: bold;
    }

    .info-row span::before {
      content: ": ";
    }

    .btn-custom {
      background-color: #8dbeea;
      color: white;
      border: none;
      font-size: 1.1rem;
      padding: 12px 28px;
      border-radius: 8px;
      width: 160px;
      transition: transform 0.2s ease, background-color 0.3s ease;
      animation: slideIn 1.5s ease-in-out 1s forwards;
      opacity: 0;
    }

    .btn-custom:hover {
      background-color: #76b2e0;
      transform: scale(1.05);
    }

    .button-row {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-top: 40px;
    }

    @keyframes zoomIn {
      0% { opacity: 0; transform: scale(0.5); }
      100% { opacity: 1; transform: scale(1); }
    }

    @keyframes rotateIn {
      0% { opacity: 0; transform: rotate(-45deg); }
      100% { opacity: 1; transform: rotate(0deg); }
    }

    @keyframes fadeIn {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    @keyframes slideIn {
      0% { opacity: 0; transform: translateX(-100%); }
      100% { opacity: 1; transform: translateX(0); }
    }

    @media (max-width: 768px) {
      .profile-container {
        flex-direction: column;
        align-items: center;
      }

      .profile-info {
        text-align: center;
      }

      .info-row {
        justify-content: center;
      }

      .info-row label {
        width: auto;
        text-align: left;
      }
    }
  </style>
</head>
<body>

  <div class="card-custom">
    <h2>👩‍🎓 Profil Mahasiswa</h2>

    <div class="profile-container">
      <img src="<?= base_url('assets/b2.jpg') ?>" alt="Foto Profil" class="profile-img">

      <div class="profile-info">
        <div class="info-row"><label>Nama Lengkap</label><span><?= $nama ?></span></div>
        <div class="info-row"><label>NIM</label><span><?= $nim ?></span></div>
        <div class="info-row"><label>Asal Prodi</label><span><?= $prodi ?></span></div>
        <div class="info-row"><label>Hobi</label><span><?= $hobi ?></span></div>
        <div class="info-row"><label>Skill</label><span><?= $skill ?></span></div>
        <div class="info-row"><label>Kampus</label><span><?=$univ ?></span></div>
      </div>
    </div>

    <div class="button-row">
      <a href="<?= site_url() ?>" class="btn btn-custom">🔙 Kembali</a>
      <a href="<?= site_url('beranda') ?>" class="btn btn-custom">🏠 Beranda</a>
    </div>
  </div>

</body>
</html>