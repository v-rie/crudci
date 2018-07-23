<?php
class Mahasiswa_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function ambildata() {
		$query = $this->db->get('mahasiswa');
		return $query->result_array();
	}
}