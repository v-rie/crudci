<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('dosen_model');
	}

	public function index() {
		$data['title'] = 'Home';
		$data['namaweb'] = 'Simple CRUD Dosen';
		$data['jumlah_dos'] = $this->dosen_model->jumlah_dos();


		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('dosen/index', $data);
		$this->load->view('template/footer', $data);
	}

	public function dataDos() {
		$data['title'] = 'Data Dosen';
		$data['namaweb'] = 'Simple CRUD Dosen';
		$data['dosen'] = $this->dosen_model->ambildata();

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('dosen/datadosen', $data);
		$this->load->view('template/footer', $data);
	}

	public function tambahDos() {

		$data['title'] = 'Data Dosen';
		$data['namaweb'] = 'Simple CRUD Dosen';

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('dosen/tambahdosen', $data);
		$this->load->view('template/footer', $data);

	}

	public function simpanDos() {
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Data Dosen';
		$data['namaweb'] = 'Simple CRUD Dosen';

		$this->form_validation->set_rules('namados', 'Nama Dosen', 'required');
		$this->form_validation->set_rules('alamatdos', 'Alamat Dosen', 'required');

		if ($this->form_validation->run() === FALSE) {

			$this->load->view('template/header', $data);
			$this->load->view('template/navbar', $data);
			$this->load->view('dosen/tambahdosen', $data);
			$this->load->view('template/footer', $data);

		} else {
			$this->dosen_model->simpanDos();
			$data['dosen'] = $this->dosen_model->ambildata();

			$this->load->view('template/header', $data);
			$this->load->view('template/navbar', $data);
			$this->load->view('dosen/datadosen', $data);
			$this->load->view('template/footer', $data);
		}
	}

	public function ubahDos($id) {
		$data['title'] = 'Ubah Dosen';
		$data['namaweb'] = 'Simple CRUD Dosen';

		$data['data_dos'] = $this->dosen_model->ambilidDos($id);

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('dosen/ubahdosen', $data);
		$this->load->view('template/footer', $data);
	}

	public function simpanubahDos() {
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Ubah Dosen';
		$data['namaweb'] = 'Simple CRUD Dosen';

		$this->form_validation->set_rules('namados', 'Nama Dosen', 'required');
		$this->form_validation->set_rules('alamatdos', 'Alamat Dosen', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['dosen'] = $this->dosen_model->ambildata();

			$this->load->view('template/header', $data);
			$this->load->view('template/navbar', $data);
			$this->load->view('dosen/datadosen', $data);
			$this->load->view('template/footer', $data);

		} else {
			$this->dosen_model->ubahDos();
			$data['dosen'] = $this->dosen_model->ambildata();

			$this->load->view('template/header', $data);
			$this->load->view('template/navbar', $data);
			$this->load->view('dosen/datadosen', $data);
			$this->load->view('template/footer', $data);
		}
	}

	public function hapusDos($id) {
		$data['title'] = 'Ubah Dosen';
		$data['namaweb'] = 'Simple CRUD Dosen';

		$data['data_dos'] = $this->dosen_model->hapusDos($id);
		$data['dosen'] = $this->dosen_model->ambildata();

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('dosen/datadosen', $data);
		$this->load->view('template/footer', $data);
	}
}
