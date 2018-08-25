<?php
class Dosen_model extends CI_Model {

	private $table = 'dosen';

	public function __construct() {

		$this->load->database();

	}

	public function ambildata() {

		$query = $this->db->get($this->table);
		return $query->result_array();

	}

	public function jumlah_dos($value='')
	{
		$query = $this->db->get($this->table);
		return $query->num_rows();
	}
	public function simpanDos() {

		$data = array(
			'namados' => $this->input->post('namados'),
			'alamat' => $this->input->post('alamatdos'),
		);

		return $this->db->insert($this->table, $data);
	}

	public function ambilidDos($id) {

		$query = $this->db->get_where($this->table, array('id_dos' => $id));
		return $query->result_array();

	}
	public function ubahDos() {
		$id_dos = $this->input->post('id_dos');
		$data = array(
			'namados' => $this->input->post('namados'),
			'alamat' => $this->input->post('alamatdos'),
		);

		return $this->db->where('id_dos', $id_dos)
			->update($this->table, $data);
	}

	public function hapusDos($id) {
		return $this->db->where('id_dos', $id)
			->delete($this->table);
	}

}