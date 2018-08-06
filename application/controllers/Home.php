<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('mahasiswa_model');
	}

	public function index() {
		$data['title'] = 'Home';
		$data['namaweb'] = 'Simple CRUD Mahasiswa';

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('template/footer', $data);
	}

	public function dataMhs() {
		$data['title'] = 'Data Mahasiswa';
		$data['namaweb'] = 'Simple CRUD Mahasiswa';
		$data['mahasiswa'] = $this->mahasiswa_model->ambildata();

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('mahasiswa/datamahasiswa', $data);
		$this->load->view('template/footer', $data);
	}

	public function tambahMhs() {

		$data['title'] = 'Data Mahasiswa';
		$data['namaweb'] = 'Simple CRUD Mahasiswa';

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('mahasiswa/tambahmahasiswa', $data);
		$this->load->view('template/footer', $data);

	}

	public function simpanMhs() {
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Data Mahasiswa';
		$data['namaweb'] = 'Simple CRUD Mahasiswa';

		$this->form_validation->set_rules('namamhs', 'Nama Mahasiswa', 'required');
		$this->form_validation->set_rules('alamatmhs', 'Alamat Mahasiswa', 'required');
		$this->form_validation->set_rules('jurusanmhs', 'Jurusan Mahasiswa', 'required');
		$this->form_validation->set_rules('semestermhs', 'Semester Mahasiswa', 'required');

		if ($this->form_validation->run() === FALSE) {

			$this->load->view('template/header', $data);
			$this->load->view('template/navbar', $data);
			$this->load->view('mahasiswa/tambahmahasiswa', $data);
			$this->load->view('template/footer', $data);

		} else {
			$this->mahasiswa_model->simpanMhs();
			$data['mahasiswa'] = $this->mahasiswa_model->ambildata();

			$this->load->view('template/header', $data);
			$this->load->view('template/navbar', $data);
			$this->load->view('mahasiswa/datamahasiswa', $data);
			$this->load->view('template/footer', $data);
		}
	}

	public function ubahMhs($id) {
		$data['title'] = 'Ubah Mahasiswa';
		$data['namaweb'] = 'Simple CRUD Mahasiswa';

		$data['data_mhs'] = $this->mahasiswa_model->ambilidMhs($id);

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('mahasiswa/ubahmahasiswa', $data);
		$this->load->view('template/footer', $data);
	}

	public function simpanubahMhs() {
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Ubah Mahasiswa';
		$data['namaweb'] = 'Simple CRUD Mahasiswa';

		$this->form_validation->set_rules('namamhs', 'Nama Mahasiswa', 'required');
		$this->form_validation->set_rules('alamatmhs', 'Alamat Mahasiswa', 'required');
		$this->form_validation->set_rules('jurusanmhs', 'Jurusan Mahasiswa', 'required');
		$this->form_validation->set_rules('semestermhs', 'Semester Mahasiswa', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['mahasiswa'] = $this->mahasiswa_model->ambildata();

			$this->load->view('template/header', $data);
			$this->load->view('template/navbar', $data);
			$this->load->view('mahasiswa/datamahasiswa', $data);
			$this->load->view('template/footer', $data);

		} else {
			$this->mahasiswa_model->ubahMhs();
			$data['mahasiswa'] = $this->mahasiswa_model->ambildata();

			$this->load->view('template/header', $data);
			$this->load->view('template/navbar', $data);
			$this->load->view('mahasiswa/datamahasiswa', $data);
			$this->load->view('template/footer', $data);
		}
	}

	public function hapusMhs($id) {
		$data['title'] = 'Ubah Mahasiswa';
		$data['namaweb'] = 'Simple CRUD Mahasiswa';

		$data['data_mhs'] = $this->mahasiswa_model->hapusMhs($id);
		$data['mahasiswa'] = $this->mahasiswa_model->ambildata();

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('mahasiswa/datamahasiswa', $data);
		$this->load->view('template/footer', $data);
	}
}
