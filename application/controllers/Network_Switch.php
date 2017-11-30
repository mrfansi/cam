<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI Controller
*/
class Network_Switch extends MY_Controller {
	
	public function __construct() {
		parent::__construct();

		// load model here
		$this->load->model('model_backbone','bb');
		$this->load->model('model_backbone_detail','bb_detail');
	}
	
	public function index() {
		$this->tampilkan('Network_Switch');
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

/* End of file Network_Switch.php */
/* Location: ./application/controllers/Network_Switch.php */