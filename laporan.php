<h3>Laporan Pembelian</h3>
<hr>

<form method="post">
	<div class="row">
		<div class="col-md-3">
			<label>Dari Tanggal</label>
			<input type="date" class="form-control" name="tglm">
		</div>
		<div class="col-md-3">
			<label>Sampai Tanggal</label>
			<input type="date" class="form-control" name="tgls">
		</div>
		<div class="cpl-md-3">
			<label>Status</label>
			<select class="form-control" name="status">
				<option value="">Pilih Status"</option>
			</select>
		</div>

		<div class="col-md-3">
			<label>&nbsp;</label><br>
			<button class="btn btn-primary" name="kirim"><i class="glypicon glypicon-tasks"></i>Lihat Laporan</a></button>
		</div>
	</div>
</form>
<br>
<table id="example2" class="table table-bordered table-hover">

	<thead>
		<tr>
			<th>No</th>
			<th>Pelanggan</th>
			<th>Tanggal</th>
			<th>Jumlah</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>Ririn Siti Arofah</td>
			<td>14-03-2022</td>
			<td>Rp 65.000</td>
			<td>Lunas</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Siska Nurlatipah</td>
			<td>15-03-2022</td>
			<td>Rp 110.000</td>
			<td>Lunas</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Siti Masitoh</td>
			<td>16-03-2022</td>
			<td>Rp 60.000</td>
			<td>dibatalkan</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Tami Lestari</td>
			<td>17-03-2022</td>
			<td>Rp 150.000</td>
			<td>pending</td>
		</tr>
</table>