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

		// create object
    	$data = new stdClass();

    	// get IP Address from table backbone
    	$data->bbs = $this->bb->get_all();
    	$data->sws = $this->sw->get_all();

    	// loop
    	foreach ($data->bbs as $bb) {
    		// exec command to check status backbone
    		$command = './handler/ping.py '. $bb->ip_addr_link;
			$output = exec($command);
			
			// update status
			$this->bb->update($bb->kode_link, array('status_link' => $output));
    	}

    	foreach ($data->sws as $sw) {
    		// exec command to check status backbone
    		$command = './handler/ping.py '. $sw->ip_addr_switch;
			$output = exec($command);
			
			// update status
			$this->sw->update($sw->kode_switch, array('status_switch' => $output));
    	}
	}
}

/* End of file Handler.php */
/* Location: ./application/controllers/Handler.php */