<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI Controller
*/
class Network_Backbone extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('model_backbone');
		$this->load->model('model_backbone_detail');
	}
	
	public function index() {
		// create object
		$data = new stdClass();

		// load all data in table
		$data->all_records = $this->model_backbone->with('model_backbone_detail')->get_all();

		// show view with data
		$this->set_title('Backbone');
		$this->tampilkan('Network_Backbone', $data);
	}

	public function detail($id) {
		// create object
		$data 			= new stdClass();
		$data->validasi = false;
		$data->kode_link= $id;
		$data->action 	= base_url('manage/backbone/ubah/' . $id);

		// select data from id
		$data->record = $this->model_backbone->get($id);
		$data->record->detail = $this->model_backbone_detail->get($id);
		// show view with data
		$this->set_title('Detail (' . $id . ')');
		$this->tampilkan('Network_Backbone_CRUD', $data);
	}

	public function tambah() {
		// set title
		$this->set_title('Tambah Link');

		// load custom library
		$this->load->library('validasi');

		// create object
		$data 			= new stdClass();
		$data->validasi = true;
		$data->kode_link = 'lnk-' . date('Ymd') . '-' . date('His');
		$data->action 	= base_url('manage/backbone/tambah');

		// validasi
		$this->validasi->set_rules('nama_link','Nama Link', array('trim', 'required'), false);
		// $this->validasi->set_rules('tinggi_tower_pop','Tinggi Tower', array('trim', 'less_than_equal_to[5], greater_than_equal_to[50]'), false);

		// run validasi
		if ($this->form_validation->run() == FALSE) {
			$this->tampilkan('Network_Backbone_CRUD', $data);
		} else {
			// set variable post in array
			$post_data = array(
				'kode_link'				=> $this->input->post('kode_link'),
				'nama_link'				=> $this->input->post('nama_link'),
				'kapasitas_link'		=> $this->input->post('kapasitas_link'),
				'ip_addr_link'			=> $this->input->post('ip_addr_link')
			);

			// set variable post detail in array
			$post_data_detail = array(
				'kode_link'				=> $this->input->post('kode_link'),
				'product_link'			=> $this->input->post('product_link'),
				'txfreq_link'			=> $this->input->post('txfreq_link'),
				'rxfreq_link'			=> $this->input->post('rxfreq_link'),
				'signal_link'			=> $this->input->post('signal_link'),
				'ssid_link'				=> $this->input->post('ssid_link'),
				'mse_link'				=> $this->input->post('mse_link'),
				'mrmc_link'				=> $this->input->post('mrmc_link'),
				'linkid_link'			=> $this->input->post('linkid_link'),
				'range_link'			=> $this->input->post('range_link'),
				'txrange_link'			=> $this->input->post('txrange_link'),
				'rxrange_link'			=> $this->input->post('rxrange_link')
			);

			// insert into table pop
			if ($this->model_backbone->insert($post_data, true) && $this->model_backbone_detail->insert($post_data_detail, true)) {
				$data->berhasil = 'Berhasil menambah data.';
			} else {
				$data->gagal = 'Gagal menambah data.';
			}

			$this->tampilkan('Network_Backbone_CRUD', $data);
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
		$data->kode_link = $id;
		$data->action 	= base_url('manage/backbone/ubah/' . $id);

		// validasi
		$this->validasi->set_rules('nama_link','Nama Link', array('trim', 'required'), false);
		// $this->validasi->set_rules('tinggi_tower_pop','Tinggi Tower', array('trim', 'less_than_equal_to[5], greater_than_equal_to[50]'), false);

		// run validasi
		if ($this->form_validation->run() == FALSE) {
			$this->tampilkan('Network_Backbone_CRUD', $data);
		} else {
			// set variable post in array
			$post_data = array(
				'nama_link'				=> $this->input->post('nama_link'),
				'kapasitas_link'		=> $this->input->post('kapasitas_link'),
				'satkapasitas_link'		=> $this->input->post('satakapasitas_link')
			);

			// set variable post detail in array
			$post_data_detail = array(
				'product_link'			=> $this->input->post('product_link'),
				'txfreq_link'			=> $this->input->post('txfreq_link'),
				'rxfreq_link'			=> $this->input->post('rxfreq_link'),
				'signal_link'			=> $this->input->post('signal_link'),
				'ssid_link'				=> $this->input->post('ssid_link'),
				'mse_link'				=> $this->input->post('mse_link'),
				'mrmc_link'				=> $this->input->post('mrmc_link'),
				'satmrmc_link'			=> $this->input->post('satmrmc_Link'),
				'linkid_link'			=> $this->input->post('linkid_link'),
				'range_link'			=> $this->input->post('range_link'),
				'txrange_link'			=> $this->input->post('txrange_link'),
				'rxrange_link'			=> $this->input->post('rxrange_link')
			);

			// insert into table backbone dan backbone_detail
			if ($this->model_backbone->update($id, $post_data) && $this->model_backbone_detail->update($id, $post_data_detail)) {
				$data->berhasil = 'Berhasil mengubah data.';
			} else {
				$data->gagal = 'Gagal mengubah data.';
			}

			$this->tampilkan('Network_Backbone_CRUD', $data);
		}
	}

	public function hapus($id) {
		// create object
		$data = new stdClass();

		// delete data in table
		if ($this->model_backbone_detail->delete($id) && $this->model_backbone->delete($id)) {
			$data->berhasil = 'Berhasil menghapus data.';
		} else {
			$data->gagal = 'Gagal menghapus data.';
		}

		$this->index();
	}
}

/* End of file Network_Backbone.php */
/* Location: ./application/controllers/Network_Backbone.php */