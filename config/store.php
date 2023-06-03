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

    function numberOnly($number) {
        $number = str_replace('Rp', '', $number);
        $number = str_replace('.', '', $number);
        $number = str_replace(',', '', $number);
        return intval($number);
    }

    function top_up($data) {
        global $connection, $user_id, $saldo;
        $saldo_post = numberOnly($data) + numberOnly($saldo);

        $q = "UPDATE users SET saldo='$saldo_post' WHERE id=$user_id";
        $update_saldo = mysqli_query($connection, $q);
        if ($update_saldo) {
            $saldo = number_format($saldo_post, 0, ',', '.');
            return 'Update Saldo Berhasil';
        } else {
            return mysqli_error($connection);
        }
    }
    
    function post_tambah($data)
    {
        global $connection, $user_id;
        if ($_POST) {            
            $no_kartu = $data['no_kartu'];
            $nominal = $data['nominal'];
            $provider = $data['provider'];
            $tanggal = date("y/m/d");

        $query = "INSERT INTO riwayat 
                    VALUES
                    ('','$no_kartu','$provider', '$nominal', '$tanggal', '$user_id')";
        mysqli_query($connection, $query);

        return mysqli_affected_rows($connection);
        }
    }
?>
