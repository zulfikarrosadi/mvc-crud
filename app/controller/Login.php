<?php 

class Login extends Controller {

	public function index () {
		if (isset($_SESSION['login'])) {
			header('location:' . BASEURL);
			exit;
		}

		$data = ["judul" => "Login"];
		$this->view('login/login', $data);
		if (isset($_POST['login'])) {
			$this->model('Login_Models')->index();
		}
	}

	public function logout()
	{
		$this->model('Login_Models')->logout();
	}
}