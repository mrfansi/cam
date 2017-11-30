<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI Controller
*/		
class Dashboard extends MY_Controller
{
	
	
	public function index() {
		$this->set_title('Home');
		$this->tampilkan('Dashboard');
	}

	public function manage() {
		$this->set_title('Menu');
		$this->tampilkan('Menu_Manage');
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */