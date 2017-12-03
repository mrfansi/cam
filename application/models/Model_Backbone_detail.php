<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI_Model
*/
class Model_Backbone_detail extends MY_Model {
	
	public $_table = 'backbone_detail';
	public $primary_key = 'kode_link';

	public $belongs_to = array( 'backbone' => array( 'model' => 'model_backbone' ) );
}

/* End of file Backbone_detail.php */
/* Location: ./application/models/Backbone_detail.php */