<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Data Jemaat</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --gold: #c9a84c;
            --dark: #1a1a2e;
            --text: #4a5568;
            --light-bg: #f9f7f4;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--light-bg);
            color: var(--text);
            min-height: 100vh;
        }

        /* LOGIN */
        .login-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 24px;
        }

        .login-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.08);
            padding: 48px 40px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-card i { font-size: 2rem; color: var(--gold); margin-bottom: 12px; }
        .login-card h2 { font-family: 'Playfair Display', serif; margin-bottom: 6px; color: var(--dark); }
        .login-card p { font-size: 0.85rem; margin-bottom: 28px; }

        .login-card input {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
            font-size: 0.92rem;
            margin-bottom: 14px;
            outline: none;
            transition: border-color 0.2s;
        }

        .login-card input:focus { border-color: var(--gold); }

        .btn-login {
            width: 100%;
            padding: 13px;
            background: var(--gold);
            color: white;
            border: none;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn-login:hover { background: #a8893a; }

        .error-msg {
            background: #fef2f2;
            border: 1px solid #fca5a5;
            color: #991b1b;
            padding: 10px 14px;
            border-radius: 5px;
            font-size: 0.85rem;
            margin-bottom: 16px;
        }

        /* DASHBOARD */
        .topbar {
            background: var(--dark);
            color: white;
            padding: 16px 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .topbar h1 {
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
            color: white;
        }

        .topbar a {
            color: var(--gold);
            text-decoration: none;
            font-size: 0.85rem;
        }

        .dashboard { padding: 36px 32px; max-width: 1100px; margin: 0 auto; }

        .summary-row {
            display: flex;
            gap: 20px;
            margin-bottom: 32px;
            flex-wrap: wrap;
        }

        .summary-card {
            background: white;
            border-radius: 8px;
            padding: 24px 28px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            flex: 1;
            min-width: 180px;
        }

        .summary-card .num {
            font-family: 'Playfair Display', serif;
            font-size: 2.4rem;
            color: var(--gold);
            line-height: 1;
        }

        .summary-card .lbl {
            font-size: 0.82rem;
            color: var(--text);
            margin-top: 6px;
        }

        .table-wrapper {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            overflow: hidden;
        }

        .table-header {
            padding: 20px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #f0ece4;
            flex-wrap: wrap;
            gap: 12px;
        }

        .table-header h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.1rem;
            color: var(--dark);
        }

        .search-box {
            padding: 8px 14px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
            font-size: 0.85rem;
            outline: none;
            width: 220px;
            transition: border-color 0.2s;
        }

        .search-box:focus { border-color: var(--gold); }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead { background: #faf8f4; }

        th {
            padding: 12px 20px;
            text-align: left;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--text);
            border-bottom: 1px solid #f0ece4;
        }

        td {
            padding: 14px 20px;
            font-size: 0.9rem;
            border-bottom: 1px solid #f9f7f4;
        }

        tr:last-child td { border-bottom: none; }
        tr:hover td { background: #fdfcf9; }

        .badge-no {
            background: #f0ece4;
            color: var(--text);
            padding: 2px 10px;
            border-radius: 20px;
            font-size: 0.78rem;
            font-weight: 600;
        }

        .wa-link {
            color: #25d366;
            text-decoration: none;
            font-weight: 500;
        }

        .wa-link:hover { text-decoration: underline; }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: var(--text);
        }

        .empty-state i { font-size: 2.5rem; color: #ddd; margin-bottom: 12px; }

        .btn-export {
            background: var(--gold);
            color: white;
            padding: 8px 18px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 0.82rem;
            font-weight: 600;
            transition: background 0.2s;
        }

        .btn-export:hover { background: #a8893a; }

        @media (max-width: 600px) {
            .dashboard { padding: 20px 16px; }
            .topbar { padding: 14px 16px; }
            th, td { padding: 10px 12px; }
        }
    </style>
</head>
<body>

<?php
session_start();

// =============================================
// GANTI PASSWORD ADMIN DI SINI
define('ADMIN_PASSWORD', 'gereja123');
// =============================================

// Handle login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password'])) {
    if ($_POST['password'] === ADMIN_PASSWORD) {
        $_SESSION['admin_login'] = true;
    } else {
        $login_error = true;
    }
}

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: admin.php');
    exit;
}

// Belum login — tampilkan form login
if (empty($_SESSION['admin_login'])):
?>

<div class="login-wrapper">
    <div class="login-card">
        <i class="fas fa-shield-halved"></i>
        <h2>Halaman Admin</h2>
        <p>Masukkan password untuk melanjutkan</p>

        <?php if (!empty($login_error)): ?>
            <div class="error-msg"><i class="fas fa-exclamation-circle"></i> Password salah.</div>
        <?php endif; ?>

        <form method="POST">
            <input type="password" name="password" placeholder="Password admin" autofocus required>
            <button type="submit" class="btn-login">Masuk</button>
        </form>
    </div>
</div>

<?php else:
// Sudah login — tampilkan data
include 'koneksi.php';

$search = trim($_GET['cari'] ?? '');
if ($search) {
    $stmt = $db->prepare("SELECT * FROM jemaat WHERE nama LIKE :q OR whatsapp LIKE :q ORDER BY tanggal_daftar DESC");
    $stmt->execute([':q' => "%$search%"]);
} else {
    $stmt = $db->query("SELECT * FROM jemaat ORDER BY tanggal_daftar DESC");
}
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$total = $db->query("SELECT COUNT(*) FROM jemaat")->fetchColumn();
$bulan_ini = $db->query("SELECT COUNT(*) FROM jemaat WHERE strftime('%Y-%m', tanggal_daftar) = strftime('%Y-%m', 'now')")->fetchColumn();
?>

<div class="topbar">
    <h1><i class="fas fa-church" style="color:var(--gold); margin-right:10px;"></i>Data Jemaat — GPI Sidang TMII</h1>
    <a href="?logout=1"><i class="fas fa-right-from-bracket"></i> Keluar</a>
</div>

<div class="dashboard">

    <div class="summary-row">
        <div class="summary-card">
            <div class="num"><?= $total ?></div>
            <div class="lbl">Total Pendaftar</div>
        </div>
        <div class="summary-card">
            <div class="num"><?= $bulan_ini ?></div>
            <div class="lbl">Daftar Bulan Ini</div>
        </div>
    </div>

    <div class="table-wrapper">
        <div class="table-header">
            <h3>Daftar Pendaftar</h3>
            <div style="display:flex; gap:10px; align-items:center; flex-wrap:wrap;">
                <form method="GET" style="display:flex; gap:8px;">
                    <input type="text" name="cari" class="search-box" placeholder="Cari nama / nomor..." value="<?= htmlspecialchars($search) ?>">
                    <button type="submit" style="padding:8px 14px; background:var(--gold); color:white; border:none; border-radius:5px; cursor:pointer; font-size:0.82rem;">Cari</button>
                    <?php if ($search): ?>
                        <a href="admin.php" style="padding:8px 14px; background:#eee; color:var(--text); border-radius:5px; font-size:0.82rem; text-decoration:none;">Reset</a>
                    <?php endif; ?>
                </form>
                <a href="export.php" class="btn-export"><i class="fas fa-file-csv"></i> Export CSV</a>
            </div>
        </div>

        <?php if (empty($data)): ?>
            <div class="empty-state">
                <i class="fas fa-inbox"></i>
                <p>Belum ada data pendaftar<?= $search ? ' yang cocok' : '' ?>.</p>
            </div>
        <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Lengkap</th>
                    <th>Umur</th>
                    <th>WhatsApp</th>
                    <th>Status Baptis</th>
                    <th>Tanggal Daftar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $i => $row): ?>
                <tr>
                    <td><span class="badge-no"><?= $i + 1 ?></span></td>
                    <td><?= htmlspecialchars($row['nama']) ?></td>
                    <td><?= htmlspecialchars($row['umur'] ?? '-') ?> tahun</td>
                    <td>
                        <a class="wa-link" href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $row['whatsapp']) ?>" target="_blank">
                            <i class="fab fa-whatsapp"></i> <?= htmlspecialchars($row['whatsapp']) ?>
                        </a>
                    </td>
                    <td><?= htmlspecialchars($row['status_baptis'] ?? '-') ?></td>
                    <td><?= date('d M Y, H:i', strtotime($row['tanggal_daftar'])) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>

</div>

<?php endif; ?>
</body>
</html>