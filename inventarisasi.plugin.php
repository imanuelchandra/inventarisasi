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
Plugins::menu('reporting', 'Laporan Inventarisasi', __DIR__ . '/pages/inventarisasi.php');