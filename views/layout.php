<?php
    while ($row = mysqli_fetch_assoc($user)) {
        $id = $row["id"];
        $nama = $row["nama"];
        $saldo = number_format($row["saldo"], 0, ',', '.');
    }
    if ($_POST['saldo'] ?? '') {
        top_up($_POST['saldo']);
    } elseif ($_POST['nominal'] ?? '') {
        top_up(-$_POST['nominal']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?> - Pulsa</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/history.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="main" id="main">
    <div class="sidebar">
        <div class="logo">
            <i>ADMIN</i>
        </div>
        <div class="nav-items">
            <ul>
                <li <?= $page != 'send' && $page != 'history' ? 'class="active"' : '' ?>><a href="<?= $baseUrl ?>/top-up">Top Up</a></li>
                <li <?= $page == 'send' ? 'class="active"' : '' ?>><a href="<?= $baseUrl ?>/send">Kirim Pulsa</a></li>
                <li <?= $page == 'history' ? 'class="active"' : '' ?>><a href="<?= $baseUrl ?>/history">Riwayat</a></li>
            </ul>
        </div>
        <div class="logout" id="logout">
            <div>
                <i class="fa-solid fa-right-from-bracket"></i> &nbsp; Logout
            </div>
        </div>
    </div>
    <div class="content">
        <header>
            <div style="display: flex;">
                <i class="fas fa-bars" id="menu"></i>
                <div class="header-saldo"><i class="fa-solid fa-wallet"></i> &nbsp; Rp. <?= $saldo ?>,00</div>
            </div>
            <div class="header-right"><?= $nama ?> <i class="fa-regular fa-circle-user"></i></div>
        </header>
        <main>
            <?php include $contentFile; ?>
        </main>
    </div>
  </div>
  <div id="simpleToast">
  ⚠️ <span>The notification message...</span>
  </div>
  <script src="../assets/js/main.js"></script>
</body>
</html>