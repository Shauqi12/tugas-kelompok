<?php
    function get_user() {
        global $connection, $user;
        $q = "SELECT * FROM users";
        $user = mysqli_query($connection, $q);
    }

    function get_history() {
        global $connection, $history;
        $q = "SELECT * FROM riwayat";
        $history = mysqli_query($connection, $q);
    }
?>
