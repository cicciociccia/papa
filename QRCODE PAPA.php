<?php
require('phpqrcode/qrlib.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$url = "https://cicciociccia.github.io/nomerepository/papa.html";

header('Content-Type: image/png');

QRcode::png($url, false, QR_ECLEVEL_L, 5);
?>