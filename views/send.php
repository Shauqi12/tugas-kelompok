<?php
if (isset($_POST["submit"])) {
    if (post_tambah($_POST) > 0) {
        echo "
        <script>
        alert('Top up Pulsa telah berhasil!!');
        </script>";
    }else {
        echo "
        <script>
        alert('Top up Pulsa gagal!!');
        </script>";
    }
}
?>
<div class="card">
    
    <form action="" method="post" class="top-up">
        <h1>PULSA</h1>
        <input type="text" placeholder="Masukan Nomor HP" name="no_kartu" class="input-topup1" required>
        <br>
        <input type="text" placeholder="Masukan Jumlah Pulsa" name="nominal" class="input-topup2" required>
        <br>
        <div class="provider">
        <input type="radio" id="xl" name="provider" value="xl" class="radio" required>
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
