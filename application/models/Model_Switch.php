<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI_Model Model_Switch
*/
class Model_Switch extends MY_Model
{
	public $_table = 'switch';
	public $primary_key = 'kode_switch';

	public $belongs_to = array( 'pop' => array( 'model' => 'model_pop' ) );
}

/* End of file Model_Switch.php */
/* Location: ./application/models/Model_Switch.php */