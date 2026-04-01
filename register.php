<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Jemaat - GPI Sidang TMII</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root { --gold:#c9a84c; --gold-dark:#a8893a; --dark:#1a1a2e; --text:#4a5568; --light-bg:#f9f7f4; --white:#ffffff; }

        body { background: var(--light-bg); display: flex; flex-direction: column; min-height: 100vh; }

        .register-wrapper {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 24px;
        }

        .register-card {
            background: var(--white);
            border-radius: 10px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.08);
            padding: 50px 44px;
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        .reg-icon { font-size: 2.2rem; color: var(--gold); margin-bottom: 12px; }

        .register-card h2 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            color: var(--dark);
            margin-bottom: 8px;
        }

        .reg-sub { font-size: 0.9rem; color: var(--text); margin-bottom: 32px; }

        .form-group { text-align: left; margin-bottom: 18px; }

        .form-group label {
            display: block;
            font-size: 0.82rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: var(--dark);
            margin-bottom: 6px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
            font-size: 0.92rem;
            color: var(--dark);
            background: var(--white);
            transition: border-color 0.2s;
            outline: none;
            appearance: none;
        }

        .form-group input:focus,
        .form-group select:focus { border-color: var(--gold); }

        .select-wrapper { position: relative; }

        .select-wrapper::after {
            content: '\f107';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text);
            pointer-events: none;
        }

        .btn-submit {
            width: 100%;
            padding: 14px;
            background: var(--gold);
            color: var(--white);
            border: none;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 8px;
        }

        .btn-submit:hover { background: var(--gold-dark); }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            font-size: 0.88rem;
            color: var(--text);
            text-decoration: none;
        }

        .back-link:hover { color: var(--gold); }

        .alert {
            padding: 14px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 0.9rem;
            text-align: left;
        }

        .alert-success { background:#f0fdf4; border:1px solid #86efac; color:#166534; }
        .alert-error   { background:#fef2f2; border:1px solid #fca5a5; color:#991b1b; }

        @media (max-width: 520px) {
            .register-card { padding: 36px 20px; }
        }
    </style>
</head>
<body>

    <div class="register-wrapper">
        <div class="register-card">
            <div class="reg-icon"><i class="fas fa-hands-praying"></i></div>
            <h2>Daftar Menjadi Jemaat</h2>
            <p class="reg-sub">Kami senang kamu ingin bergabung. Isi data di bawah ini.</p>

            <?php if (isset($_GET['sukses'])): ?>
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i> Pendaftaran berhasil! Kami akan segera menghubungi kamu. Tuhan memberkati.
                </div>
            <?php elseif (isset($_GET['error'])): ?>
                <div class="alert alert-error">
                    <i class="fas fa-exclamation-circle"></i> Terjadi kesalahan. Pastikan semua data terisi dengan benar.
                </div>
            <?php endif; ?>

            <form action="simpan.php" method="POST">

                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
                </div>

                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" id="umur" name="umur" placeholder="Contoh: 25" min="1" max="120" required>
                </div>

                <div class="form-group">
                    <label for="whatsapp">Nomor Telepon / WhatsApp</label>
                    <input type="tel" id="whatsapp" name="whatsapp" placeholder="Contoh: 08123456789" required>
                </div>

                <div class="form-group">
                    <label for="status_baptis">Status Baptis</label>
                    <div class="select-wrapper">
                        <select id="status_baptis" name="status_baptis" required>
                            <option value="" disabled selected>-- Pilih status baptis --</option>
                            <option value="Sudah">Sudah Dibaptis</option>
                            <option value="Belum">Belum Dibaptis</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn-submit">Kirim Pendaftaran</button>
            </form>

            <a href="index.php" class="back-link">&#8592; Kembali ke Beranda</a>
        </div>
    </div>

</body>
</html>