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
        <a href="index.html">Home</a>
        <a href="jenis.html">Jenis Kucing</a>
        <a href="profil.html">Profil</a>
        <a href="form.html">Form</a>
    </div>
    
    <section id="contact">
            <h2>Kontak</h2>

            <form id="contactForm" action="form.html" method="get" novalidate>
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
        </section>
    </main>

     
    <div id="footer">
        2622500034_SHELLA MADINA_SI1A_UTS Pemrograman Web Dasar
    </div>
    <script src="script.js"></script>
</body>
</html>