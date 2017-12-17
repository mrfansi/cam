<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI_Model Model_Vlan
*/
class Model_Vlan extends MY_Model
{
	public $table = 'vlan';
	public $primary_key = 'kode_vlan';
	public $fillable = array();
	public function __construct()
	{
		parent::__construct();
	}
}

/* End of file Model_Vlan.php */
/* Location: ./application/models/Model_Vlan.php */