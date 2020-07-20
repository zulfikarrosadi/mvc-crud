<h1>Ubah Buku</h1>
<form method="post" action="">
<ul>
	<li>
		<label>
			Judul Buku
			<input type="text" name="judul_buku" autocomplete="off" autofocus="on" value="<?php echo $data["judul_buku"] ?>">
		</label>
	<li>
	<li>
		<label>
			Author
			<input type="text" name="author" id=""  autocomplete="off" value="<?php echo $data["author"] ?>">
		</label>
	</li>
	<li>
		<label>
			Tahun terbit buku
			<input type="number" name="tahun" id=""  autocomplete="off" value="<?php echo $data["tahun"] ?>">
		</label>
	</li>
	<li>
		<button type="submit" name="submit">Ubah Data Buku</button>
	</li>
</ul>
</form>
<a href="<?php echo BASEURL ?>">Kembali</a>