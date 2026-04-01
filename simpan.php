<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: register.php');
    exit;
}

$nama          = trim(htmlspecialchars($_POST['nama'] ?? ''));
$umur          = (int)($_POST['umur'] ?? 0);
$whatsapp      = trim(htmlspecialchars($_POST['whatsapp'] ?? ''));
$status_baptis = trim(htmlspecialchars($_POST['status_baptis'] ?? ''));

if (empty($nama) || empty($whatsapp) || $umur <= 0 || !in_array($status_baptis, ['Sudah', 'Belum'])) {
    header('Location: register.php?error=1');
    exit;
}

$sql  = "INSERT INTO jemaat (nama, umur, whatsapp, status_baptis) VALUES (:nama, :umur, :whatsapp, :status_baptis)";
$stmt = $db->prepare($sql);
$stmt->bindParam(':nama', $nama);
$stmt->bindParam(':umur', $umur);
$stmt->bindParam(':whatsapp', $whatsapp);
$stmt->bindParam(':status_baptis', $status_baptis);

if ($stmt->execute()) {
    header('Location: selamat-datang.php?nama=' . urlencode($nama));
} else {
    header('Location: index.php#daftar');
}
exit;
?>