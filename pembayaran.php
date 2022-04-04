<h2>Data Pembayaran</h2>

<div class="row">
	<div class="col-md-6">
		<table class="table">
			<tr>
				<th>Nama</th>
				<td>Ririn Siti Arofah</td>
			</tr>
			<tr>
				<th>Bank</th>
				<td>Mandiri</td>
			</tr>
			<tr>
				<th>Jumlah</th>
				<td>Rp 40.000</td>
			</tr>
			<tr>
				<th>Tanggal</th>
				<td>14-03-2022</td>
			</tr>
		</table>
	</div>
	<div class="col-md-6">
		<img src="../admin/bukti_pembayaran/bukti.jpg" class="img-responsive">
	</div>
	<div>
 <form method="post">
	<div class="form-group">
		<label>No Resi Pengiriman</label>
		<input type="text" class="form-control" name="resi">
	</div>
	<div class="form-group">
		<label>Status</label>
		<select class="form-control" name="status">
			<option value="">Pilih Status</option>
			<option value="lunas">Lunas</option>
			<option value="barang dikirim">Barang Dikirim</option>
			<option value="batal">Batal</option>
		</select>
	</div>
	<a href="main.php?halaman=berhasil" class="btn btn-primary">Proses</a>
	
 </form>