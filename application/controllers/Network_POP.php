<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI Controller
*/
class Network_POP extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Model_Pop','pop');

		// load custom library
		$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
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


		if ($id == '') {
			redirect('manage/pop/tambah');
		}

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
		$this->load->library('form_validation');

		// create object
		$data 			= new stdClass();
		$data->validasi = true;
		$data->kode_pop = 'pop-' . date('Ymd') . '-' . date('His');
		$data->action 	= base_url('manage/pop/tambah');

		// form_validation
		$this->form_validation->set_rules('nama_pop','Nama POP', 'trim|required|is_unique[pop.nama_pop]');
		$this->form_validation->set_rules('jenis_gedung_pop','Jenis Gedung', 'trim|required');
		$this->form_validation->set_rules('tinggi_tower_pop','Tinggi Tower', 'trim|required|integer');
		
		// run form_validation
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

			if ($this->pop->insert($post_data)) {
				$this->session->set_flashdata('berhasil', 'Berhasil menambah data.');
			} else {
				$this->session->set_flashdata('gagal', 'Gagal menambah data.');
			}

			redirect('manage/pop','refresh');
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
		$data->kode_pop = $id;
		$data->action 	= base_url('manage/pop/ubah/' . $id);


		if ($id == '') {
			redirect('manage/pop/tambah');
		}


		// form_validation
		$this->form_validation->set_rules('nama_pop','Nama POP', 'trim|required');
		$this->form_validation->set_rules('jenis_gedung_pop','Jenis Gedung', 'trim|required');
		$this->form_validation->set_rules('tinggi_tower_pop','Tinggi Tower', 'trim|required|integer');
	
		// run form_validation
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

			if ($this->pop->update($post_data, $id)) {
				$this->session->set_flashdata('berhasil', 'Berhasil mengubah data.');
			} else {
				$this->session->set_flashdata('gagal', 'Gagal mengubah data.');
			}

			redirect('manage/pop','refresh');
		}
	}

	public function hapus($id) {
		// create object
		$data = new stdClass();

		// delete data in table
		if ($this->pop->delete($id)) {
			$this->session->set_flashdata('berhasil', 'Berhasil menghapus data.');
		} else {
			$this->session->set_flashdata('gagal', 'Gagal menghapus data.');
		}

		redirect('manage/pop','refresh');
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
        redirect('manage/pop');
    }
}

/* End of file Network_POP.php */
/* Location: ./application/controllers/Network_POP.php */