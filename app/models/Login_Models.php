<?php 

class Login_Models {
	private $db;
	private $table = 'user';
	public function index () {
		$this->db = new Database;

		$username = $_POST['username'];
		$password = $_POST['password'];

		$this->db->query("SELECT * FROM $this->table WHERE username = :username");
		$this->db->bind('username', $username);

		$row = $this->db->getData();
		//var_dump($row); //die;

		if ($row['username'] == $username) {
			$data = $this->db->getData();
			if (password_verify($password, $data['password'])) {
				$_SESSION['login'] = true;
			} else {
				echo "password salah"; die;
			}
		} else {
			echo "username tidak ada"; die;
		}
	}

	public function logout()
	{
		unset($_SESSION['login']);
		header('location:'. BASEURL);
	}
}