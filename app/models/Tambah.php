<?php 

class Tambah {
	private $db;
	private $table = "buku";
	
	public function __construct () {
		$this->db = new Database;
	}

	public function tambahDataBuku($data)
	{
		$judul_buku = $data['judul_buku'];
		$author = $data['author'];
		$tahun = $data['tahun'];

		$this->db->query("INSERT INTO ". $this->table ." (judul_buku, author, tahun) VALUES (:judul_buku, :author, :tahun)");

		$this->db->bind('judul_buku', $judul_buku);
		$this->db->bind('author', $author);
		$this->db->bind('tahun', $tahun);

		$this->db->execute();
		return $this->db->rowCount();
	}
}