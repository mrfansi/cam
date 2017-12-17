<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI_Model Model_Vlan
*/
class Model_Vlan extends MY_Model
{
	public $table = 'vlan';
	public $primary_key = 'kode_vlan';
	
	public function __construct()
	{
		$this->fillable = array(
			'kode_vlan',
			'vlan_id',
			'vlan_vendor',
			'vlan_kapasitas',
			'vlan_satuan',
			'kode_pop'
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

/* End of file Model_Vlan.php */
/* Location: ./application/models/Model_Vlan.php */