<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI_Model
*/
class Model_Backbone_detail extends MY_Model 
{
	public $table = 'backbone_detail';
	public $primary_key = 'kode_link';
	public $fillable = array();
	public $protected = array();
	public function __construct()
	{
		$this->has_one['backbone'] = 'Model_Backbone';
		parent::__construct();
	}
}

/* End of file Backbone_detail.php */
/* Location: ./application/models/Backbone_detail.php */