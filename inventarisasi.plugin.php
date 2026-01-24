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


$path =  __DIR__ . '/pages/inventarisasi.php';
 // Make default group menu
Plugins::group('Inventarisasi', function() use($path) {
            // Scan all file inside module directory as menu
 Plugins::menu('reporting', 'Buku Induk', $path);
});