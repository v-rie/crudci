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

}
