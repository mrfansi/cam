<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI_Model
*/
class Model_Backbone extends MY_Model {
	
	public $_table = 'backbone';
	public $primary_key = 'kode_link';

	public $belongs_to = array( 'backbone_detail' => array( 'model' => 'model_backbone_detail' ) );
}

/* End of file Backbone.php */
/* Location: ./application/models/Backbone.php */