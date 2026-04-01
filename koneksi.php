<?php
// Membuat atau membuka file database bernama 'gereja.db'
$db = new PDO('sqlite:gereja.db');

// Membuat tabel jemaat jika belum ada
$query = "CREATE TABLE IF NOT EXISTS jemaat (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nama TEXT NOT NULL,
    umur INTEGER NOT NULL,
    whatsapp TEXT NOT NULL,
    status_baptis TEXT NOT NULL,
    tanggal_daftar DATETIME DEFAULT CURRENT_TIMESTAMP
)";
$db->exec($query);

// Tambah kolom baru jika tabel lama sudah ada (migrasi)
try { $db->exec("ALTER TABLE jemaat ADD COLUMN umur INTEGER NOT NULL DEFAULT 0"); } catch (Exception $e) {}
try { $db->exec("ALTER TABLE jemaat ADD COLUMN status_baptis TEXT NOT NULL DEFAULT ''"); } catch (Exception $e) {}
?>