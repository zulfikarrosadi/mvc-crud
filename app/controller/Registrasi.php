<?php 

class Registrasi extends Controller {
	public function index()
	{
		$data = ["judul" => "Registrasi"];
		$this->view('login/registrasi', $data);

		if (isset($_POST['registrasi'])) {
			if($this->model('Registrasi_Models') > 0) {
				$_SESSION['login'] = true;
				header('location: '. BASEURL);
			}
		}

	}
}