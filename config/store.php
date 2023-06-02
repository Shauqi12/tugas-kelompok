<?php
    $user_id = 1;
    function get_user() {
        global $connection, $user_id, $user;
        $q = "SELECT * FROM users WHERE id=$user_id";
        $user = mysqli_query($connection, $q);
    }
    get_user();
    function get_history() {
        global $connection, $history;
        $q = "SELECT * FROM riwayat";
        $history = mysqli_query($connection, $q);
    }

    function top_up() {
        global $connection, $user_id, $saldo;
        $saldo_now = str_replace(',', '', $saldo);
        $saldo_now = str_replace('.', '', $saldo_now);
        if ($_POST) {
            $saldo_post = $_POST['saldo'] + $saldo_now;
            $q = "UPDATE users SET saldo='$saldo_post' WHERE id=$user_id";
            $update_saldo = mysqli_query($connection, $q);
            if ($update_saldo) {
                $saldo = number_format($saldo_post, 0, ',', '.');
            } else {
                echo "Error :" . mysqli_error($connection);
            }
        }

    }
?>
