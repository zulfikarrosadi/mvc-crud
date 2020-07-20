<?php 

class Registrasi_Models {
	private $db;
	private $table = "user";

	public function __construct () {
		$this->db = new Database;

		$username = $_POST['username'];
		$password = $_POST['password'];
		$passwordConfirm = $_POST['passwordConfirm'];

		$this->db->query("SELECT username FROM $this->table WHERE username = :username");
		$this->db->bind('username', $username);
		
		if($this->db->getData()) {
			echo "username sudah ada";
			die;
		}

		if ($password !== $passwordConfirm) {
			echo "password tidak sama";
			die;
		}

		$password = password_hash($password, PASSWORD_DEFAULT);

		$this->db->query("INSERT INTO $this->table (username, password) VALUES (:username, :password)");

		$this->db->bind('username', $username);
		$this->db->bind('password', $password);

		$this->db->execute();

		return $this->db->rowCount();
	}
}