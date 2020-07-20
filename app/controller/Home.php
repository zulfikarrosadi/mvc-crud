<?php 

class Home extends Controller {
	public function index()
	{
		$data = [
			"judul" => "Home",
			"data" => $this->model('Home_Models')->getDataBuku()
		];
		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}
	public function setDataBuku()
	{
		$data = [
			"judul" => "Tambah Data Buku"
		];
		$this->view('templates/header', $data);
		$this->view('home/tambah');

		if (isset($_POST['submit'])) {
			if ($this->model('Tambah')->tambahDataBuku($_POST) > 0) {
				Flasher::setFlash('berhasil', 'ditambahkan', 'success');
				header('location:'. BASEURL );
			} else {
				Flasher::setFlash('gagal', 'ditambahkan', 'warning');
				header('location:'. BASEURL );
			}
		}
		$this->view('templates/footer');
	}
	
	public function ubah($id)
	// kalo bingung dari mana $id itu datang, inget call_user_func_array
	{
		$data = [
			"judul" => "Ubah Data Buku",
			"DataUbah" => $this->model('Home_Models')->getDataUbah($id)
		];
		$this->view('templates/header', $data);
		$this->view('home/ubah', $data["DataUbah"]);
		if (isset($_POST['submit'])) {
			if ( $this->model('Home_Models')->ubah($id) > 0) {
				Flasher::setFlash('berhasil', 'diubah', 'success');
				header('location:'. BASEURL );
			} else {
				Flasher::setFlash('gagal', 'diubah', 'danger');
				header('location:'. BASEURL );
			}
		}
		$this->view('templates/footer');
	}
	public function hapus($id)
	{
		if($this->model('Home_Models')->hapus($id) > 0){
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('location:' . BASEURL);
		}
	}
}