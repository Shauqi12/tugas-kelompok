<?php
$pageTitle = "Halaman Utama";
$contentFile = "";
$baseUrl = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']);
$url = strtok($_SERVER['REQUEST_URI'], '?');
$page = basename($url);

if ($page == 'K3-ProjectPulsa-B03') {
    header("Location: $url"."index.php/top-up");
}

if ($page === 'send') {
    $pageTitle = "Kirim";
    $contentFile = "./views/send.php";
} elseif ($page === 'history') {
    $pageTitle = "Riwayat";
    $contentFile = "./views/history.php";
} else {
    $pageTitle = "Halaman Top Up";
    $contentFile = "./views/top-up.php";
}

include './config/database.php';
include './config/store.php';
include './views/layout.php';
?>