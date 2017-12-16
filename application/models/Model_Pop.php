<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI_Model
*/
class Model_Pop extends MY_Model
{
	
	public $table = 'pop';
	public $primary_key = 'kode_pop';
	public $fillable = array();
	public $protected = array();
	public function __construct()
	{
		parent::__construct();
	}
}

/* End of file Pop.php */
/* Location: ./application/models/Pop.php */