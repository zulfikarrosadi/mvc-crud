<?php 

class Flasher {
	public static function setFlash($pesan, $aksi, $type)
	{
		$_SESSION['flashMessage'] = [
			"pesan" => $pesan,
			"aksi" => $aksi,
			"type" => $type
		];
	}
	public static function flash()
	{
		if (isset($_SESSION['flashMessage'])) {
			echo "Data buku " .$_SESSION['flashMessage']['pesan'] . " ". $_SESSION['flashMessage']['aksi'] ."<br>";
			unset($_SESSION['flashMessage']);
		}
	}
}