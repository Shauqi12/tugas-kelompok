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
    
    function post_tambah($data)
    {
        global $connection, $user_id, $nominal;
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
    function afterPulsa()
    {   global $connection,$user, $nominal, $n, $user_id;
        $row = mysqli_fetch_assoc($user);
        $balance = $row["saldo"];
        $n = $balance-$nominal;
        $query = "UPDATE users SET saldo = $n WHERE id=$user_id";
        mysqli_query($connection, $query);
    }
?>
