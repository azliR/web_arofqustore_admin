<h2>Ubah Data Pelanggan</h2>
<form method="post" enctype="multipart/form.data"></form>
	<div class="form-grup">
		<label>Nama Pelanggan</label>
		<input type="text" name="nama" class="form-control">
	</div>
	<div class="form-grup">
		<label>Jenis Kelamin</label>
			<select class="form-control" name="status">
			<option value="">Laki-Laki</option>
			<option value="lunas">Perempuan</option>
		</select>

	</div>
	<div class="form-grup">
		<label>Email</label>
		<input type="number" name="berat" class="form-control">
	</div>
	<div class="form-grup">
		<label>No Handphone</label>
		<input type="number" name="nohp" class="form-control">
	</div>
	<div class="form-grup">
		<label>Alamat</label>
		<textarea name="deskripsi" class="form-control" rows="10">
		</textarea>
	</div>
	<a href="main.php?halaman=berhasil" class="btn btn-primary">Ubah</a>
</form>