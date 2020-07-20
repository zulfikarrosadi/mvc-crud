<?php $_SESSION['halRegistrasi'] = true; ?>

<h1>Halaman Registrasi</h1>
<p>Sudah Punya Akun? </p><a href="<?php echo BASEURL ?>/Login">Login</a>
<form method="post" action="">
<ul>
	<li>
		<label>
			Username
			<input type="text" name="username" autofocus="on" required>
		</label>
	<li>
	<li>
		<label>
			Password
			<input type="password" name="password" required>
		</label>
	<li>
		<li>
			<label>
				Konfirmasi Password
				<input type="password" name="passwordConfirm" required>
			</label>
		<li>
	<li>
		<button type="submit" name="registrasi">Login</button>
	</li>
</ul>
</form>
