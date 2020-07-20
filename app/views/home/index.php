<h1>Daftar Buku</h1>

<?php Flasher::flash(); if(isset($_SESSION['login'])) : ?>
	<a href="<?php echo BASEURL ?>/Login/logout" onclick="return confirm('Yakin Mau logout')">Logout</a>
	<a href="<?php echo BASEURL ?>/Home/setDataBuku">Tambah Buku</a>
	<hr>
<?php elseif(!isset($_SESSION['login'])) : ?>
	<a href="<?php echo BASEURL ?>/Login/index">Login</a>
	<a href="<?php echo BASEURL ?>/Registrasi/index">Registrasi</a>
<?php endif; ?>

<table border="1" cellspacing="0" cellpadding="10">
	<thead>
		<tr>
			<td>ID</td>
			<td>Judul Buku</td>
			<td>Author</td>
			<td>Tahun Terbit</td>
			<?php if(isset($_SESSION['login'])) :?>
			<td>Aksi</td>
			<?php endif; ?>
		</tr>
	</thead>
	<?php $i = 1;foreach($data["data"] as $buku) : ?>
		<tbody>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $buku['judul_buku']; ?></td>
				<td><?php echo $buku['author']; ?></td>
				<td><?php echo $buku['tahun']; ?></td>
				<?php if(isset($_SESSION['login'])) : ?>
				<td>
					<a href="<?php echo BASEURL ?>/Home/ubah/<?php echo $buku['id_buku'] ?>">Ubah</a>
					<a href="<?php echo BASEURL ?>/Home/hapus/<?php echo $buku['id_buku'] ?>" onclick="return confirm('yakin')">Hapus</a>
				</td>
				<?php endif; ?>
			</tr>
		</tbody>
	<?php ++$i;endforeach; ?>
</table>