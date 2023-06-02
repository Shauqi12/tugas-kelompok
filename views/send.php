<?php
if (isset($_POST["submit"])) {
    if (post_tambah($_POST) > 0) {
        echo " data berhasil ditambahkan";
    }else {
        echo "data gagal";
    }
}
?>
<!-- <style>
    label{
        background-color: blue;
    }
</style> -->
<div class="card">
    
    <form action="" method="post" class="top-up">
        <h1>PULSA</h1>
        <input type="text" placeholder="Masukan Nomor HP" name="no_kartu" class="input-topup1">
        <br>
        <input type="text" placeholder="Masukan Jumlah Pulsa" name="nominal" class="input-topup2">
        <br>
        <div class="provider">
        <input type="radio" id="xl" name="provider" value="xl" class="radio">
            <label for="xl" class="xl">XL</label>
        <input type="radio" id="telkomsel" name="provider" value="telkomsel" class="radio">
            <label for="telkomsel" class="telkomsel">Telkomsel</label>
        <input type="radio" id="tri" name="provider" value="3" class="radio">
            <label for="tri" class="tri">3</label>
        <input type="radio" id="im3" name="provider" value="im3" class="radio">
            <label for="im3" class="im3">im3</label>
        <br>
        </div>
        <button type="submit" name="submit">kirim</button>
    
    </form>
</div>
