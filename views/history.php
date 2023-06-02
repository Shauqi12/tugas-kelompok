<?php
//Terhubung ke Database
$koneksi = mysqli_connect("localhost", "root", "", "latihan");

//Mengirim Query
$query = "SELECT * FROM riwayat";
$result = mysqli_query($koneksi, $query);

// Mengambil Data
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<div class="card">
    <table>
    <tr>
        <th>Tanggal</th>
        <th>No. Telpon</th>
        <th>Nominal</th>
        <th>Provider</th>
    </tr>
    <?php foreach ($data as $row): ?>
  <tr>
    <td><?php echo $row['tanggal']; ?></td>
    <td><?php echo $row['no_kartu']; ?></td>
    <td><?php echo $row['nominal']; ?></td>
    <td><?php echo $row['provider']; ?></td>
  </tr>
  <?php endforeach; ?>
    </table>
</div>