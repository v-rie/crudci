<?php
class Mahasiswa_model extends CI_Model {

	private $table = 'mahasiswa';

	public function __construct() {

		$this->load->database();

	}

	public function ambildata() {

		$query = $this->db->get($this->table);
		return $query->result_array();

	}

	public function simpanMhs() {

		$data = array(
			'namamhs' => $this->input->post('namamhs'),
			'alamat' => $this->input->post('alamatmhs'),
			'jurusan' => $this->input->post('jurusanmhs'),
			'semester' => $this->input->post('semestermhs'),
		);

		return $this->db->insert($this->table, $data);
	}

	public function ambilidMhs($id) {

		$query = $this->db->get_where($this->table, array('id_mhs' => $id));
		return $query->result_array();

	}
	public function ubahMhs() {
		$id_mhs = $this->input->post('id_mhs');
		$data = array(
			'namamhs' => $this->input->post('namamhs'),
			'alamat' => $this->input->post('alamatmhs'),
			'jurusan' => $this->input->post('jurusanmhs'),
			'semester' => $this->input->post('semestermhs'),
		);

		return $this->db->where('id_mhs', $id_mhs)
			->update($this->table, $data);
	}

	public function hapusMhs($id) {
		return $this->db->where('id_mhs', $id)
			->delete($this->table);
	}

}