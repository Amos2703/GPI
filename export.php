<?php
session_start();

if (empty($_SESSION['admin_login'])) {
    header('Location: admin.php');
    exit;
}

include 'koneksi.php';

$data = $db->query("SELECT nama, umur, whatsapp, status_baptis, tanggal_daftar FROM jemaat ORDER BY tanggal_daftar DESC")->fetchAll(PDO::FETCH_ASSOC);

$filename = 'data-jemaat-' . date('Y-m-d') . '.csv';

header('Content-Type: text/csv; charset=UTF-8');
header('Content-Disposition: attachment; filename="' . $filename . '"');

$out = fopen('php://output', 'w');
// BOM agar Excel bisa baca karakter Indonesia
fputs($out, "\xEF\xBB\xBF");

fputcsv($out, ['No', 'Nama Lengkap', 'Umur', 'WhatsApp', 'Status Baptis', 'Tanggal Daftar']);

foreach ($data as $i => $row) {
    fputcsv($out, [
        $i + 1,
        $row['nama'],
        $row['umur'],
        $row['whatsapp'],
        $row['status_baptis'],
        date('d M Y H:i', strtotime($row['tanggal_daftar']))
    ]);
}

fclose($out);
exit;
?>