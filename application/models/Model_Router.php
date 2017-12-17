<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI_Model Router MY_Model
*/
class Model_Router extends MY_Model
{
	
	public $table = 'router';
	public $primary_key = 'kode_router';

	public function __construct()
	{
		$this->fillable = array(
			'kode_router',
			'hostname_router',
			'ip_addr_router',
			'tipe_router',
			'kode_pop',
			'status_router'
		);

		$this->has_one['pop'] = array(

			'foreign_model' => 'Model_Pop',
			'foreign_table' => 'pop',
			'foreign_key' 	=> 'kode_pop', 
			'local_key' 	=> 'kode_pop'

		);
		parent::__construct();
	}
}

/* End of file Model_Router.php */
/* Location: ./application/models/Model_Router.php */