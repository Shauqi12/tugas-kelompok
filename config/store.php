<?php
    $user_id = 1;
    function get_user() {
        global $connection, $user_id, $user;
        $q = "SELECT * FROM users WHERE id=$user_id";
        $user = mysqli_query($connection, $q);
    }

    function get_history() {
        global $connection, $history;
        $q = "SELECT * FROM riwayat";
        $history = mysqli_query($connection, $q);
    }
?>
