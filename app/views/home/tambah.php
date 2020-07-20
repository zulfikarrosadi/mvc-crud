<h1>Tambah Buku</h1>
<form method="post" action="">
<ul>
	<li>
		<label>
			Judul Buku
			<input type="text" name="judul_buku" autocomplete="off" autofocus="on">
		</label>
	<li>
	<li>
		<label>
			Author
			<input type="text" name="author" id=""  autocomplete="off">
		</label>
	</li>
	<li>
		<label>
			Tahun terbit buku
			<input type="number" name="tahun" id=""  autocomplete="off">
		</label>
	</li>
	<li>
		<button type="submit" name="submit">Tambah Data Buku</button>
	</li>
</ul>
</form>
<a href="<?php echo BASEURL ?>">Kembali</a>