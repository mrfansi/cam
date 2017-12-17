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
    		// get id
    		$id = $bb->kode_link;

    		// exec command to check status backbone
    		$command = './handler/ping.py '. $bb->ip_addr_link;
			$output = exec($command);

			// set status
			$update = array('status_link' => $output);

			// update status
			$this->bb->where('kode_link', $id)->update($update);
    	}

    	foreach ($data->sws as $sw) {
    		// get id
    		$id = $sw->kode_switch;

    		// exec command to check status backbone
    		$command = './handler/ping.py '. $sw->ip_addr_switch;
			$output = exec($command);
			
			// set status
			$update = array('status_switch' => $output);

			// update status
			$this->sw->where('kode_switch', $id)->update($update);
    	}

    	foreach ($data->rts as $rt) {
    		// get id
    		$id = $rt->kode_router;

    		// exec command to check status backbone
    		$command = './handler/ping.py '. $rt->ip_addr_router;
			$output = exec($command);
			
			// set status
			$update = array('status_router' => $output);

			// update status
			$this->rt->where('kode_router', $id)->update($update);
    	}
	}
}

/* End of file Handler.php */
/* Location: ./application/controllers/Handler.php */