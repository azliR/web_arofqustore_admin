<h2>Ubah Produk</h2>
<form method="post" enctype="multipart/form.data"></form>
<div class="form-grup">
	<label>Nama Produk</label>
	<input type="text" name="nama" class="form-control">
</div>
<div class="form-grup">
	<label>Harga</label>
	<input type="number" name="harga" class="form-control">
</div>
<div class="form-grup">
	<label>Berat (gr)</label>
	<input type="number" name="berat" class="form-control">
</div>
<div class="form-grup">
	<label>Ganti Foto</label>
	<input type="file" name="foto" class="form-control">
</div>
<div class="form-grup">
	<label>Deskripsi</label>
	<textarea name="deskripsi" class="form-control" rows="10">
		</textarea>
</div>
<a href="main.php?halaman=berhasil" class="btn btn-primary">Ubah</a>
</form>