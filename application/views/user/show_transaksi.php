<h1>DETAIL TRANSAKSI</h1>
<br>
<b>NAMA USER</b>
<p><?php echo $trans['nama_user'] ?></p>
<b>NAMA PAKET</b>
<p><?php echo $trans['nama_paket'] ?></p>
<b>BERAT TRANSAKSI LAUNDRY</b>
<p><?php echo $trans['berat_transaksi'] ?></p>
<b>TANGGAL TRANSAKSI LAUNDRY</b>
<p><?php echo $trans['tanggal_masuk_transaksi'] ?></p>
<b>HARGA TOTAL</b>
<p><?php echo number_format($trans['harga_total']) ?></p>
<b>KETERANGAN TRANSAKSI</b>
<p><?php echo $trans['keterangan_transaksi'] ?></p>
<b>STATUS</b>
<p><?php echo $trans['status_transaksi'] ?></p>
