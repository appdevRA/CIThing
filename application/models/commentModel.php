<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class commentModel extends CI_Model {
	public function __construct(){
		$this->load->database();
	}

	function createData() {
		$data = array (
			'username' => $this->input->post('username'),
			'message' => $this->input->post('message'),
		);
		$this->db->insert('comments', $data);
	}

	function readData() {
        $query = $this->db->query('SELECT * FROM comments');
        return $query->result();
    }

    // function getData($id) {
    //     $query = $this->db->query('SELECT * FROM tbl_name WHERE `id` =' .$id);
    //     return $query->row();
    // }
}
