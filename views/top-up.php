<?php
    function get_DB() {
        global $connection, $result;
        $q = "SELECT * FROM users";
        $result = mysqli_query($connection, $q);
    }

    get_DB();
?>

<p>INI HALAMAN TOP UP</p>
<a href="<?= $baseUrl ?>/send">Klik untuk menuju halaman kirim pulsa</a>
