<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI_Model Model_Switch
*/
class Model_Switch extends MY_Model
{
	public $table = 'switch';
	public $primary_key = 'kode_switch';

	public function __construct()
	{
		$this->fillable = array(
			'kode_switch',
			'hostname_switch',
			'ip_addr_switch',
			'tipe_switch',
			'kode_pop',
			'status_switch'
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

/* End of file Model_Switch.php */
/* Location: ./application/models/Model_Switch.php */