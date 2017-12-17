<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI_Controller
*/
class Handler extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	}

	public function ping() {
		//load model
		$this->load->model('Model_Backbone', 'bb');
		$this->load->model('Model_Switch', 'sw');
		$this->load->model('Model_Router', 'rt');

		// create object
    	$data = new stdClass();

    	// get IP Address from table backbone
    	$data->bbs = $this->bb->get_all();
    	$data->sws = $this->sw->get_all();
    	$data->rts = $this->rt->get_all();

    	// loop
    	foreach ($data->bbs as $bb) {
    		// exec command to check status backbone
    		$command = './handler/ping.py '. $bb->ip_addr_link;
			$output = exec($command);
			
			// update status
			$this->bb->where('kode_link', $sw->kode_link)->update(array('status_link' => $output));
    	}

    	foreach ($data->sws as $sw) {
    		// exec command to check status backbone
    		$command = './handler/ping.py '. $sw->ip_addr_switch;
			$output = exec($command);
			
			// update status
			$this->sw->where('kode_switch', $sw->kode_switch)->update(array('status_switch' => $output));
    	}

    	foreach ($data->rts as $rt) {
    		// exec command to check status backbone
    		$command = './handler/ping.py '. $rt->ip_addr_router;
			$output = exec($command);
			
			// update status
			$this->rt->where('kode_router', $sw->kode_router)->update(array('status_router' => $output));
    	}
	}
}

/* End of file Handler.php */
/* Location: ./application/controllers/Handler.php */