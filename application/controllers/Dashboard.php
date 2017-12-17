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
		$data->switch 			= $this->dashboard->count_switch();
		$data->router 			= $this->dashboard->count_router();
		$data->bb_downs 		= $this->dashboard->backbone_down();
		$data->sw_downs 		= $this->dashboard->switch_down();
		$data->rt_downs 		= $this->dashboard->router_down();

		// show view with data
		$this->set_title('Dashboard');
		$this->tampilkan('Dashboard', $data);
	}

	public function manage() {
		$this->set_title('Menu');
		$this->tampilkan('Menu_Manage');
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */