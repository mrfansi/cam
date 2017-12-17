<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI Controller
*/
class Network_Backbone extends MY_Controller {
	
	public function __construct() {
		parent::__construct();

		// load model
		$this->load->model('Model_Backbone','bb');
		$this->load->model('Model_Backbone_detail','bb_detail');

		// load custom library
		$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
	}
	
	public function index() {
		// create object
		$data = new stdClass();

		// load all data in table
		$data->all_records = $this->bb->order_by('ip_addr_link', 'ASC')->get_all();

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

		if ($id == '') {
			redirect('manage/backbone/tambah');
		}

		// select data from id
		$data->record = $this->bb->with_backbone_detail()->where('kode_link', $id)->get();
		
		// show view with data
		$this->set_title('Detail (' . $id . ')');
		$this->tampilkan('Network_Backbone_CRUD', $data);
	}

	public function tambah() {

		// set title
		$this->set_title('Tambah Link');

		// load custom library
		$this->load->library('form_validation');

		// create object
		$data 			= new stdClass();
		$data->validasi = true;
		$data->kode_link = 'lnk-' . date('Ymd') . '-' . date('His');
		$data->action 	= base_url('manage/backbone/tambah');

		// form_validation
		$this->form_validation->set_rules('nama_link','Nama Link', 'trim|required|is_unique[backbone.nama_link]');
		$this->form_validation->set_rules('kapasitas_link','Kapasitas', 'trim|required');
		$this->form_validation->set_rules('ip_addr_link','IP Address', 'trim|required|valid_ip|is_unique[backbone.ip_addr_link]');
		$this->form_validation->set_rules('product_link','Hardware', 'trim|required');
		$this->form_validation->set_rules('txfreq_link','TX Freq', 'trim|required');
		$this->form_validation->set_rules('rxfreq_link','RX Freq', 'trim|required');
		$this->form_validation->set_rules('signal_link','Signal', 'trim|required|integer');
		$this->form_validation->set_rules('range_link','Jarak', 'trim|integer');
		$this->form_validation->set_rules('kapasitas_link','Kapasitas', 'trim|integer');


		// run form_validation
		if ($this->form_validation->run() == FALSE) {
			$this->tampilkan('Network_Backbone_CRUD', $data);
		} else {
			// set variable post in array
			$post_data = array(
				'kode_link'				=> $this->input->post('kode_link'),
				'nama_link'				=> $this->input->post('nama_link'),
				'kapasitas_link'		=> $this->input->post('kapasitas_link'),
				'ip_addr_link'			=> $this->input->post('ip_addr_link'),
				'product_link'			=> $this->input->post('product_link'),
				'txfreq_link'			=> $this->input->post('txfreq_link'),
				'rxfreq_link'			=> $this->input->post('rxfreq_link'),
				'signal_link'			=> $this->input->post('signal_link')
			);

			$post_data_detail = array(
				'kode_link'				=> $this->input->post('kode_link'),
				'mse_link'				=> $this->input->post('mse_link'),
				'linkid_link'			=> $this->input->post('linkid_link'),
				'range_link'			=> $this->input->post('range_link'),
				'txrange_link'			=> $this->input->post('txrange_link'),
				'rxrange_link'			=> $this->input->post('rxrange_link')
			);

			// insert into table pop
			if ($this->bb->insert($post_data) && $this->bb_detail->insert($post_data_detail)) {
				$this->session->set_flashdata('berhasil', 'Berhasil menambah data.');
			} else {
				$this->session->set_flashdata('gagal', 'Gagal menambah data.');
			}

			redirect('manage/backbone','refresh');
		}
	}

	public function ubah($id) {

		// set title
		$this->set_title('Ubah Data (' . $id . ')');


		// load custom library
		$this->load->library('form_validation');

		// create object
		$data 			= new stdClass();
		$data->validasi = true;
		$data->kode_link = $id;
		$data->action 	= base_url('manage/backbone/ubah/' . $id);

		if ($id == '') {
			redirect('manage/backbone/tambah');
		}

		// form_validation
		$this->form_validation->set_rules('nama_link','Nama Link', 'trim|required');
		$this->form_validation->set_rules('kapasitas_link','Kapasitas', 'trim|required');
		$this->form_validation->set_rules('product_link','Hardware', 'trim|required');
		$this->form_validation->set_rules('txfreq_link','TX Freq', 'trim|required');
		$this->form_validation->set_rules('rxfreq_link','RX Freq', 'trim|required');
		$this->form_validation->set_rules('signal_link','Signal', 'trim|required|integer');
		$this->form_validation->set_rules('range_link','Jarak', 'trim|integer');
		$this->form_validation->set_rules('kapasitas_link','Kapasitas', 'trim|integer');

		// run form_validation
		if ($this->form_validation->run() == FALSE) {
			$this->tampilkan('Network_Backbone_CRUD', $data);
		} else {
			// set variable post in array
			$post_data = array(
				'nama_link'				=> $this->input->post('nama_link'),
				'kapasitas_link'		=> $this->input->post('kapasitas_link'),
				'product_link'			=> $this->input->post('product_link'),
				'txfreq_link'			=> $this->input->post('txfreq_link'),
				'rxfreq_link'			=> $this->input->post('rxfreq_link'),
				'signal_link'			=> $this->input->post('signal_link')
			);

			// set variable post detail in array
			$post_data_detail = array(
				'mse_link'				=> $this->input->post('mse_link'),
				'linkid_link'			=> $this->input->post('linkid_link'),
				'range_link'			=> $this->input->post('range_link'),
				'txrange_link'			=> $this->input->post('txrange_link'),
				'rxrange_link'			=> $this->input->post('rxrange_link')
			);

			// insert into table backbone dan backbone_detail
			if ($this->bb->where('kode_link',$id)->update($post_data) && $this->bb_detail->where('kode_link', $id)->update($post_data_detail)) {
				$this->session->set_flashdata('berhasil', 'Berhasil mengubah data.');
			} else {
				$this->session->set_flashdata('gagal', 'Gagal mengubah data.');
			}

			redirect('manage/backbone','refresh');
		}
	}

	public function hapus($id) {

		// create object
		$data = new stdClass();

		if ($id == '') {
			redirect('manage/backbone/tambah');
		}

		// delete data in table
		if ($this->bb_detail->where('kode_link', $id)->delete() && $this->bb->where('kode_link', $id)->delete()) {
			$this->session->set_flashdata('berhasil', 'Berhasil menghapus data.');
		} else {
			$this->session->set_flashdata('gagal', 'Gagal menghapus data.');
		}

		redirect('manage/backbone','refresh');
	}

	public function upload(){
        $fileName = time().$_FILES['file']['name'];
         
        $config['upload_path'] = './assets/'; //buat folder dengan nama assets di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 10000;
         
        $this->load->library('upload');
        $this->upload->initialize($config);
         
        if(! $this->upload->do_upload('file') )
        $this->upload->display_errors();
             
        $media = $this->upload->data('file');
        $inputFileName = './assets/'.$media['file_name'];
         
        try {
                $inputFileType = IOFactory::identify($inputFileName);
                $objReader = IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }
 
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();
             
            for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                                NULL,
                                                TRUE,
                                                FALSE);
                                                 
                //Sesuaikan sama nama kolom tabel di database                                
                 $data = array(
                    "idimport"=> $rowData[0][0],
                    "nama"=> $rowData[0][1],
                    "alamat"=> $rowData[0][2],
                    "kontak"=> $rowData[0][3]
                );
                 
                //sesuaikan nama dengan nama tabel
                $insert = $this->db->insert("eimport",$data);
                delete_files($media['file_path']);
                     
            }
        redirect('manage/backbone');
    }
}

/* End of file Network_Backbone.php */
/* Location: ./application/controllers/Network_Backbone.php */