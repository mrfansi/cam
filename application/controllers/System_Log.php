<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI Controller
*/
class System_Log extends MY_Controller {
	
	public function __construct() {
		parent::__construct();

		// load model here
		$this->load->model('model_backbone','bb');
		$this->load->model('model_backbone_detail','bb_detail');
	}
	
	public function index() {
		$this->tampilkan('System_Log');
	}
}

/* End of file System_Log.php */
/* Location: ./application/controllers/System_Log.php */