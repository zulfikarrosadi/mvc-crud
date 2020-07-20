<?php unset($_SESSION['halRegistrasi']); $_SESSION['halLogin'] = true; ?>

<h1>Halaman Login</h1>
<p>Belum Punya Akun? </p><a href="<?php echo BASEURL ?>/Registrasi">Registrasi</a>
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
		<button type="submit" name="login">Login</button>
	</li>
</ul>
</form>
