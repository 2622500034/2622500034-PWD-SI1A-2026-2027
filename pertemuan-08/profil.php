<?php
$nim = "2622500034";
$namaMahasiswa = "Shella madina";
$programStudi = "sistem informasi";
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
    <div id="isi">
        <h2>Profile</h2>
        <div class="profile">
            <img src="img/fotoi.jpg">
            <p>Nama: <?php echo $namaMahasiswa ?></p>
            <p>NIM: <?php echo $nim ?></p>
            <P>Program Studi: <?php echo $programStudi ?></P>
        </div>
     </div>
    <div id="footer">
        2622500034_SHELLA MADINA_SI1A_UTS Pemrograman Web Dasar
    </div>
    <script src="script.js"></script>
</body>
</html>