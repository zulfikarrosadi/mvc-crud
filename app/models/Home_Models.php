<?php 

class Home_Models {
	private $db;
	private $table = 'buku';

	public function __construct () {
		$this->db = new Database;
	}

	public function getDataBuku()
	{
		$this->db->query('SELECT * FROM buku');
		return $this->db->getAllData();
	}

	public function getDataBukuById($id)
	{
		$this->db->query('SELECT * FROM '. $this->table .' WHERE id_buku = :id');
		$this->db->bind('id', $id);
		return $this->db->getData();
	}

	public function getDataUbah($id)
	{
		return $this->getDataBukuById($id);
	}

	public function ubah($id)
	{
		$judul_buku = htmlspecialchars ($_POST['judul_buku']);
		$author = htmlspecialchars ( $_POST['author'] );
		$tahun = htmlspecialchars ($_POST['tahun']);

		$this->db->query("UPDATE $this->table SET judul_buku = :judul, author = :author, tahun = :tahun WHERE id_buku = :id");

		$this->db->bind('id', $id);
		$this->db->bind('judul', $judul_buku);
		$this->db->bind('author', $author);
		$this->db->bind('tahun', $tahun);

		$this->db->execute();
		return $this->db->rowCount();
	}
	public function hapus($id)
	{
		$this->db->query("DELETE FROM buku WHERE id_buku = :id");
		$this->db->bind('id', $id);
		$this->db->execute();
		return $this->db->rowCount();
	}
}