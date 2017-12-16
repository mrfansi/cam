<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI_Model
*/
class Model_Backbone extends MY_Model
{
	public $table = 'backbone';
	public $primary_key = 'kode_link';
	public $fillable = array();
	public $protected = array();
	public function __construct()
	{
		parent::__construct();
	}
}

/* End of file Backbone.php */
/* Location: ./application/models/Backbone.php */