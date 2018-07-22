<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$data['title'] = 'Home';
		$data['namaweb'] = 'Simple CRUD Mahasiswa';
		$this->load->view('admin/index', $data);
	}
}
