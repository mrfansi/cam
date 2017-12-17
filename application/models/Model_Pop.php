<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI_Model
*/
class Model_Pop extends MY_Model
{
	
	public $table = 'pop';
	public $primary_key = 'kode_pop';

	public function __construct()
	{
		$this->fillable = array(
			'kode_pop',
			'nama_pop',
			'jenis_gedung_pop',
			'tinggi_tower_pop',
			'alamat_pop',
			'latitude_pop',
			'longitude_pop'
		);

		parent::__construct();
	}
}

/* End of file Pop.php */
/* Location: ./application/models/Pop.php */