<?php
/**
 * Plugin Name: Inventarisasi
 * Plugin URI: -
 * Description: Laporan Inventarisasi Koleksi Perpustakaan
 * Version: 1.0.0
 * Author: -
 * Author URI: -
 */
use SLiMS\Plugins;

$plugin = Plugins::getInstance();

Plugins::getInstance()->registerAutoload(__DIR__);


$pathBukuInduk = __DIR__ . '/pages/inventarisasi.php';
$pathRekap = __DIR__ . '/pages/rekapitulasi_inventarisasi.php';
//$path =  __DIR__ . '/pages/inventarisasi.php';
 // Make default group menu
Plugins::group('Inventarisasi', function() use($pathBukuInduk, $pathRekap) {
            // Scan all file inside module directory as menu
 Plugins::menu('reporting', 'Buku Induk', $pathBukuInduk);
 Plugins::menu('reporting', 'Rekapitulasi Inventarisasi', $pathRekap);
});