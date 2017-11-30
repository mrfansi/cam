<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI Controller
*/
class Network_Vlan extends MY_Controller {
	
	public function __construct() {
		parent::__construct();

		// load model here
		$this->load->model('model_backbone','bb');
		$this->load->model('model_backbone_detail','bb_detail');
	}
	
	public function index() {
		$this->tampilkan('Network_Vlan');
	}

	public function detail($id) {

	}

	public function tambah() {

	}

	public function ubah($id) {

	}

	public function hapus($id) {

	}
}

/* End of file Network_Vlan.php */
/* Location: ./application/controllers/Network_Vlan.php */