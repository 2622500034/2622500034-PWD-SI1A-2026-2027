<?php
session_start();

if (isset($_POST['nama'])) 
 $nama = trim((string) ($_POST['nama'] ?? ''));
 $email = trim((string) ($_POST['email'] ?? ''));
 $tanggal = trim((string) ($_POST['tanggal'] ?? ''));
 $pesanKesalahan = '';

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (trim($nama ?? '') === '') {
      $pesanKesalahan .= 'Nama lengkap wajib diisi. ';
    }
  }

    if (trim($email ?? '') === '') {
      $pesanKesalahan .= 'Email wajib diisi. ';
    }

    if (trim($tanggal ?? '') === '') {
      $pesanKesalahan .= 'Tanggal kunjungan wajib diisi. ';
    }

    if (trim($email) !== '') {
  if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $pesanKesalahan .= 'Format email tidak valid. ';
  }
}
    $pesanKesalahan = $_SESSION['pesanKesalahan'] ?? ''; 

$nama = $_SESSION['nama'] ?? ''; 
$email = $_SESSION['email'] ?? ''; 
$tanggal = $_SESSION['tanggal'] ?? date("Y-m-d");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $_SESSION['pesanKesalahan'] = $pesanKesalahan;
  $_SESSION['nama'] = $nama;
  $_SESSION['email'] = $email;
  $_SESSION['tanggal'] = $tanggal;
   header('Location: form.php');
  exit;
} 
?>
<!DOCTYPE html>
<html>
<head>
    <title>profil - Pet House Cimiw </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="header">
        <h1>Pet House Cimiw</h1>
    </div>
    <div id="menu">
        <a href="index.php">Home</a>
        <a href="jenis.php">Jenis Kucing</a>
        <a href="profil.php">Profil</a>
        <a href="form.php">Form</a>
    </div>
    
    <section id="contact">
            <h2>Kontak</h2>
            <?php if ($pesanKesalahan !== ''): ?>
            <p class="form-feedback-error">
            <?= htmlspecialchars($pesanKesalahan, ENT_QUOTES, 'UTF-8') ?>
            </p>
            <?php endif; ?>

            <form id="contactForm" action="form.php" method="get" novalidate>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label><br />
                    <input
                        class="input-form"
                        type="text"
                        id="nama"
                        name="nama"
                        placeholder="Masukkan nama lengkap"
                        minlength="3"
                        maxlength="50"
                        required 
                    />
                </div>

                <div class="form-group">
                    <label for="email">Email</label><br />
                    <input class="input-form" type="email" id="email" name="email" placeholder="2622500011@mahasiswa.atmaluhur.ac.id" required />
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal Kunjungan</label><br />
                    <input class="input-form" type="date" id="tanggal" name="tanggal" required />
                </div>

                <button type="submit">Kirim</button>
                <button type="reset">Batal</button>
                <p id="formFeedback"></p>
            </form>
            <?php if (!empty($nama)): ?>
          <p>Email:
            <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>
          </p>
          <p>Tanggal kunjungan:
            <?= htmlspecialchars($tanggal, ENT_QUOTES, 'UTF-8') ?>
          </p>
            <?php endif; ?>
        </section>
    </main>

     
    <div id="footer">
        2622500034_SHELLA MADINA_SI1A_UTS Pemrograman Web Dasar
    </div>
    <script src="script.js"></script>
</body>
</html>