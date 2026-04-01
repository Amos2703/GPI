<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gereja Pentakosta Indonesia Sidang TMII</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;1,400&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

    <!-- NAVIGASI -->
    <nav class="navbar">
        <div class="nav-brand">GPI Sidang TMII</div>
        <ul class="nav-links">
            <li><a href="#beranda">Beranda</a></li>
            <li><a href="#tentang">Tentang</a></li>
            <li><a href="#visi-misi">Visi & Misi</a></li>
            <li><a href="#ibadah">Jadwal Ibadah</a></li>
            <li><a href="#kegiatan">Kegiatan</a></li>
            <li><a href="#kontak">Kontak</a></li>
            <li><a href="#daftar" class="nav-btn">Daftar Jemaat</a></li>
        </ul>
        <button class="hamburger" onclick="toggleMenu()">&#9776;</button>
    </nav>

    <!-- HERO / BERANDA -->
    <section class="hero" id="beranda">
        <div class="hero-content">
            <p class="hero-verse">"Karena begitu besar kasih Allah akan dunia ini..." — Yohanes 3:16</p>
            <h1>Selamat Datang di<br>Gereja Pentakosta Indonesia<br>Sidang TMII</h1>
            <p class="hero-sub">Bertumbuh dalam kasih karunia dan pengenalan akan Tuhan.</p>
            <div class="hero-actions">
                <a href="#tentang" class="btn-primary">Kenali Kami</a>
                <a href="#daftar" class="btn-outline">Bergabung</a>
            </div>
        </div>
        <div class="hero-scroll">
            <span>&#8595;</span>
        </div>
    </section>

    <!-- TENTANG KAMI -->
    <section class="section tentang" id="tentang">
        <div class="container">
            <div class="section-label">Tentang Kami</div>
            <h2>Siapa Kami?</h2>
            <p class="section-desc">
                <!-- ISI DESKRIPSI GEREJA DI SINI -->
                Kami adalah komunitas orang percaya yang rindu melihat setiap jiwa mengalami kasih Tuhan.
                Mari bergabung bersama kami dalam ibadah raya dan persekutuan yang menguatkan iman.
            </p>
            <div class="stats-row">
                <div class="stat-item">
                    <span class="stat-number">1975</span>
                    <span class="stat-label">Tahun Berdiri</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">200+</span>
                    <span class="stat-label">Jemaat Aktif</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">30</span>
                    <span class="stat-label">Bidang Pelayanan</span>
                </div>
            </div>
        </div>
    </section>

    <!-- VISI & MISI -->
    <section class="section visi-misi" id="visi-misi">
        <div class="container">
            <div class="section-label light">Arah Pelayanan</div>
            <h2>Visi & Misi</h2>
            <div class="vm-grid">
                <div class="vm-card">
                    <div class="vm-icon"><i class="fas fa-eye"></i></div>
                    <h3>Visi</h3>
                    <p>
                        <!-- ISI VISI GEREJA DI SINI -->
                        Menjadi gereja yang memuliakan Tuhan dan menjangkau jiwa-jiwa bagi Kristus.
                    </p>
                </div>
                <div class="vm-card">
                    <div class="vm-icon"><i class="fas fa-hands-praying"></i></div>
                    <h3>Misi</h3>
                    <ul>
                        <!-- ISI MISI GEREJA DI SINI -->
                        <li>Memberitakan Injil kepada segala bangsa</li>
                        <li>Membangun jemaat yang kuat dalam iman</li>
                        <li>Melayani masyarakat dengan kasih Kristus</li>
                    </ul>
                </div>
                <div class="vm-card">
                    <div class="vm-icon"><i class="fas fa-book-bible"></i></div>
                    <h3>Nilai Kami</h3>
                    <ul>
                        <!-- ISI NILAI-NILAI GEREJA DI SINI -->
                        <li>Firman Tuhan sebagai dasar</li>
                        <li>Doa dan penyembahan</li>
                        <li>Persekutuan yang hangat</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- JADWAL IBADAH -->
    <section class="section ibadah" id="ibadah">
        <div class="container">
            <div class="section-label">Jadwal Ibadah</div>
            <h2>Bergabunglah Bersama Kami</h2>
            <div class="jadwal-grid">
                <div class="jadwal-card">
                    <div class="jadwal-icon"><i class="fas fa-church"></i></div>
                    <h3>Ibadah Raya</h3>
                    <p class="jadwal-hari">Minggu</p>
                    <p class="jadwal-jam">09.00 WIB</p>
                </div>
                <div class="jadwal-card">
                    <div class="jadwal-icon"><i class="fas fa-users"></i></div>
                    <h3>Ibadah Pemuda</h3>
                    <p class="jadwal-hari">Sabtu</p>
                    <p class="jadwal-jam">19.00 WIB</p>
                </div>
                <div class="jadwal-card">
                    <div class="jadwal-icon"><i class="fas fa-child"></i></div>
                    <h3>Sekolah Minggu</h3>
                    <p class="jadwal-hari">Minggu</p>
                    <p class="jadwal-jam">06.30 WIB</p>
                </div>
                <div class="jadwal-card">
                    <div class="jadwal-icon"><i class="fas fa-fire"></i></div>
                    <h3>Ibadah Doa</h3>
                    <p class="jadwal-hari">Kamis</p>
                    <p class="jadwal-jam">19.00 WIB</p>
                </div>
            </div>
        </div>
    </section>

    <!-- KEGIATAN / GALERI -->
    <section class="section kegiatan" id="kegiatan">
        <div class="container">
            <div class="section-label">Dokumentasi</div>
            <h2>Kegiatan Kami</h2>
            <p class="section-desc">Sekilas momen berharga dalam perjalanan pelayanan kami.</p>
            <div class="gallery">
                <!-- GANTI src dengan path foto kamu -->
                <div class="gallery-item">
                    <img src="images/kegiatan1.jpg" alt="Kegiatan 1">
                    <div class="gallery-overlay"><span><!-- NAMA KEGIATAN --></span></div>
                </div>
                <div class="gallery-item">
                    <img src="images/kegiatan2.jpg" alt="Kegiatan 2">
                    <div class="gallery-overlay"><span><!-- NAMA KEGIATAN --></span></div>
                </div>
                <div class="gallery-item">
                    <img src="images/kegiatan3.jpg" alt="Kegiatan 3">
                    <div class="gallery-overlay"><span><!-- NAMA KEGIATAN --></span></div>
                </div>
                <div class="gallery-item">
                    <img src="images/kegiatan4.jpg" alt="Kegiatan 4">
                    <div class="gallery-overlay"><span><!-- NAMA KEGIATAN --></span></div>
                </div>
                <div class="gallery-item">
                    <img src="images/kegiatan5.jpg" alt="Kegiatan 5">
                    <div class="gallery-overlay"><span><!-- NAMA KEGIATAN --></span></div>
                </div>
                <div class="gallery-item">
                    <img src="images/kegiatan6.jpg" alt="Kegiatan 6">
                    <div class="gallery-overlay"><span><!-- NAMA KEGIATAN --></span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- AYAT INSPIRASI -->
    <section class="ayat-section">
        <div class="container">
            <i class="fas fa-quote-left quote-icon"></i>
            <blockquote>
                <!-- GANTI DENGAN AYAT FAVORIT GEREJA -->
                "Tetapi kamu akan menerima kuasa, kalau Roh Kudus turun ke atas kamu, dan kamu akan menjadi saksi-Ku..."
            </blockquote>
            <cite>— Kisah Para Rasul 1:8</cite>
        </div>
    </section>

    <!-- KONTAK -->
    <section class="section kontak" id="kontak">
        <div class="container">
            <div class="section-label">Hubungi Kami</div>
            <h2>Lokasi & Kontak</h2>
            <div class="kontak-grid">
                <div class="kontak-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <h4>Alamat</h4>
                    <p>Jl. Perintis No.13 6, RT.6/RW.5, Ceger, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13820</p>
                </div>
                <div class="kontak-item">
                    <i class="fas fa-phone"></i>
                    <h4>Telepon / WhatsApp</h4>
                    <p>+62 821-1169-5285</p>
                </div>
                <div class="kontak-item">
                    <i class="fab fa-instagram"></i>
                    <h4>Instagram</h4>
                    <p>@gpitmiijkt</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FORM PENDAFTARAN -->
    <section class="cta-section" id="daftar">
        <div class="container">
            <p class="cta-verse">"Seorang sahabat menaruh kasih setiap waktu..." — Amsal 17:17</p>
            <h2>Daftar Menjadi Jemaat</h2>
            <p>Jadilah bagian dari keluarga besar Gereja Pentakosta Indonesia Sidang TMII.</p>

            <form action="simpan.php" method="POST" class="daftar-form">
                <div class="daftar-grid">
                    <div class="daftar-field">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" placeholder="Nama lengkap" required>
                    </div>
                    <div class="daftar-field">
                        <label for="umur">Umur</label>
                        <input type="number" id="umur" name="umur" placeholder="Umur" min="1" max="120" required>
                    </div>
                    <div class="daftar-field">
                        <label for="whatsapp">No. Telepon / WhatsApp</label>
                        <input type="tel" id="whatsapp" name="whatsapp" placeholder="08xxxxxxxxxx" required>
                    </div>
                    <div class="daftar-field">
                        <label for="status_baptis">Status Baptis</label>
                        <select id="status_baptis" name="status_baptis" required>
                            <option value="" disabled selected>-- Pilih --</option>
                            <option value="Sudah">Sudah Dibaptis</option>
                            <option value="Belum">Belum Dibaptis</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn-daftar">Kirim Pendaftaran</button>
            </form>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <p>&copy; <span id="tahun"></span> Gereja Pentakosta Indonesia Sidang TMII.</p>
    </footer>

    <script>
        // Tahun otomatis di footer
        document.getElementById('tahun').textContent = new Date().getFullYear();

        // Hamburger menu untuk mobile
        function toggleMenu() {
            document.querySelector('.nav-links').classList.toggle('open');
        }

        // Navbar shadow saat scroll
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        });
    </script>

</body>
</html>