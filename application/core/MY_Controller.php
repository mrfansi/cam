<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* MY Controller
*/
class MY_Controller extends CI_Controller
{
	protected $title;
	protected $deskripsi;
	protected $keywords;
	
	public function __construct() {
		parent::__construct();


		// load library dan helper disini
		// library
		$this->load->library('layout');
		$this->load->library('session');

		// helper
		$this->load->helper('url');

		// cek session untuk user
		if (isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin']) {
			return $this;
		} else {
			redirect('auth');
		}
	}

	public function tampilkan($halaman) {

		if ($this->title == null) {
			$this->layout->set_title('CAM - ' . str_replace('_', ' ', $halaman));
		} else {
			$this->layout->set_title('CAM - ' . $this->title);
		}
		
		$this->layout->set_deskripsi($this->deskripsi);
		$this->layout->set_keywords($this->keywords);
		$this->layout->add_includes('assets/css/font-awesome.min.css')
					 ->add_includes('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700', false)
					 ->add_includes('assets/css/bulma.min.css')
					 ->add_includes('assets/css/admin.css')
				     ->add_includes('assets/js/bulma.js')
				     ->add_includes('assets/img/favicon.ico');

		$this->layout->tampilkan($halaman);
	}

	public function set_title($title) {
		$this->title = $title;
	}

	public function set_deskripsi($deskripsi) {
		$this->deskripsi = $deskripsi;
	}

	public function set_keywords($keywords) {
		$this->keywords = $keywords;
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */