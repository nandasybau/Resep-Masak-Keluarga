<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kartu Nama Anggota</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #fff;
      text-align: center;
      padding: 40px;
    }
    .card {
      display: inline-block;
      background-color: #f2f2f2;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      max-width: 400px;
    }
    .card h2 {
      margin-top: 0;
    }
    .card p {
      font-size: 16px;
      color: #333;
    }
    .whatsapp-button {
      margin-top: 20px;
      display: inline-block;
      background-color: #25D366;
      color: white;
      padding: 12px 20px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
    }
    .whatsapp-button:hover {
      background-color: #1ebe57;
    }
  </style>
</head>
<body>

<?php
  $nama = htmlspecialchars($_POST['nama']);
  $email = htmlspecialchars($_POST['email']);
  $kota = htmlspecialchars($_POST['kota']);
  $alasan = htmlspecialchars($_POST['alasan']);
?>

  <div class="card">
    <h2>Selamat Datang, <?= $nama ?>!</h2>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Kota Asal:</strong> <?= $kota ?></p>
    <p><strong>Alasan Bergabung:</strong><br><?= nl2br($alasan) ?></p>
    <a class="whatsapp-button" href="https://chat.whatsapp.com/DMDHqBlSuBD8j2CfdlZqX4" target="_blank">
      Join WhatsApp Grup Memasak
    </a>
  </div>

</body>
</html>