<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI_Model
*/
class Model_Backbone extends MY_Model
{
	public $table = 'backbone';
	public $primary_key = 'kode_link';
	public $fillable = array(
		'kode_link',
		'nama_link',
		'ip_addr_link',
		'kapasitas_link',
		'product_link',
		'txfreq_link',
		'rxfreq_link',
		'signal_link'
	);

	public function __construct()
	{
		$this->has_one['backbone_detail'] = array(
	
			'foreign_model' => 'Model_Backbone_detail',
			'foreign_table' => 'backbone_detail',
			'foreign_key' 	=> 'kode_link', 
			'local_key' 	=> 'kode_link'
		);

		$this->has_many['switch'] = array(

			'foreign_model' => 'Model_Switch',
			'foreign_table' => 'switch',
			'foreign_key' 	=> 'kode_pop', 
			'local_key' 	=> 'kode_pop'
		);

		$this->has_many['vlan'] = array(

			'foreign_model' => 'Model_Vlan',
			'foreign_table' => 'vlan',
			'foreign_key' 	=> 'kode_pop', 
			'local_key' 	=> 'kode_pop'
		);


		parent::__construct();
	}

}

/* End of file Backbone.php */
/* Location: ./application/models/Backbone.php */