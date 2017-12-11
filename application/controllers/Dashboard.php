<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI Controller
*/		
class Dashboard extends MY_Controller {
	
	public function __construct() {
		parent::__construct();

		// load model
		$this->load->model('Model_Dashboard','dashboard');
	}
	
	public function index() {
		// create object
		$data = new stdClass();

		// set parameter
		$data->pop 				= $this->dashboard->count_pop();
		$data->backbone 		= $this->dashboard->count_backbone();
		$data->backbone_detail 	= $this->dashboard->count_backbone_detail();
		$data->vlan 			= $this->dashboard->count_vlan();

		$data->downs 			= $this->dashboard->backbone_down();


		// show view with data
		$this->set_title('Home');
		$this->tampilkan('Dashboard', $data);
	}

	public function manage() {
		$this->set_title('Menu');
		$this->tampilkan('Menu_Manage');
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */