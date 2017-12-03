<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI Controller
*/
class Network_POP extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('model_pop','pop');

		
	}
	
	public function index() {
		// create object
		$data = new stdClass();

		// load all data in table
		$data->all_records = $this->pop->get_all();

		// show view with data
		$this->set_title('POP');
		$this->tampilkan('Network_POP', $data);
	}

	public function detail($id) {

		// create object
		$data 			= new stdClass();
		$data->validasi = false;
		$data->kode_pop	= $id;
		$data->action 	= base_url('manage/pop/ubah/' . $id);

		// select data from id
		$data->record = $this->pop->get($id);

		// show view with data
		$this->set_title('Detail (' . $id . ')');
		$this->tampilkan('Network_POP_CRUD', $data);

	}

	public function tambah() {
		// set title
		$this->set_title('Tambah POP');

		// load custom library
		$this->load->library('validasi');

		// create object
		$data 			= new stdClass();
		$data->validasi = true;
		$data->kode_pop = 'pop-' . date('Ymd') . '-' . date('His');
		$data->action 	= base_url('manage/pop/tambah');

		// validasi
		$this->validasi->set_rules('nama_pop','Nama POP', array('trim', 'required'), false);
		// $this->validasi->set_rules('tinggi_tower_pop','Tinggi Tower', array('trim', 'less_than_equal_to[5], greater_than_equal_to[50]'), false);

		// run validasi
		if ($this->form_validation->run() == FALSE) {
			$this->tampilkan('Network_POP_CRUD', $data);
		} else {
			// set variable post in array
			$post_data = array(
				'kode_pop'				=> $this->input->post('kode_pop'),
				'nama_pop'				=> $this->input->post('nama_pop'),
				'jenis_gedung_pop'		=> $this->input->post('jenis_gedung_pop'),
				'tinggi_tower_pop'		=> $this->input->post('tinggi_tower_pop'),
				'alamat_pop'			=> $this->input->post('alamat_pop'),
				'latitude_pop'			=> $this->input->post('latitude_pop'),
				'longitude_pop'			=> $this->input->post('longitude_pop')		
			);

			// insert into table pop

			if ($this->pop->insert($post_data, true)) {
				$data->berhasil = 'Berhasil menambah data.';
			} else {
				$data->gagal = 'Gagal menambah data.';
			}

			$this->tampilkan('Network_POP_CRUD', $data);
		}
	}

	public function ubah($id) {
		// set title
		$this->set_title('Ubah Data (' . $id . ')');

		// load custom library
		$this->load->library('validasi');

		// create object
		$data 			= new stdClass();
		$data->validasi = true;
		$data->kode_pop = $id;
		$data->action 	= base_url('manage/pop/ubah/' . $id);

		// validasi
		$this->validasi->set_rules('nama_pop','Nama POP', array('trim', 'required'), false);
		// $this->validasi->set_rules('tinggi_tower_pop','Tinggi Tower', array('trim', 'less_than_equal_to[5], greater_than_equal_to[50]'), false);

		// run validasi
		if ($this->form_validation->run() == FALSE) {
			$this->tampilkan('Network_POP_CRUD', $data);
		} else {
			// set variable post in array
			$post_data = array(
				'nama_pop'				=> $this->input->post('nama_pop'),
				'jenis_gedung_pop'		=> $this->input->post('jenis_gedung_pop'),
				'tinggi_tower_pop'		=> $this->input->post('tinggi_tower_pop'),
				'alamat_pop'			=> $this->input->post('alamat_pop'),
				'latitude_pop'			=> $this->input->post('latitude_pop'),
				'longitude_pop'			=> $this->input->post('longitude_pop')		
			);

			// update into table pop

			if ($this->pop->update($id, $post_data)) {
				$data->berhasil = 'Berhasil mengubah data.';
			} else {
				$data->gagal = 'Gagal mengubah data.';
			}

			$this->tampilkan('Network_POP_CRUD', $data);
		}
	}

	public function hapus($id) {
		// create object
		$data = new stdClass();

		// delete data in table
		if ($this->pop->delete($id)) {
			$data->berhasil = 'Berhasil menghapus data.';
		} else {
			$data->gagal = 'Gagal menghapus data.';
		}

		$this->index();
	}
}

/* End of file Network_POP.php */
/* Location: ./application/controllers/Network_POP.php */