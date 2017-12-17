<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI Controller
*/
class Network_Switch extends MY_Controller {
	
	public function __construct() {
		parent::__construct();

		// load model here
		$this->load->model('Model_Switch','sw');
        $this->load->model('Model_Pop','pop');
	}
	
	public function index() {
		// create object
        $data = new stdClass();

        // load all data in table
        $data->all_records = $this->sw->get_all();

        // show view with data
        $this->set_title('Switch');
        $this->tampilkan('Network_Switch', $data);
	}

	public function detail($id) {
        // create object
        $data           	= new stdClass();
        $data->validasi 	= false;
        $data->kode_switch	= $id;
        $data->action   	= base_url('manage/switch/ubah/' . $id);
        $data->pops     	= $this->pop->get_all();


        if ($id == '') {
            redirect('manage/switch/tambah');
        }

        // select data from id
        $data->record = $this->sw->where('kode_switch', $id)->get();

        // show view with data
        $this->set_title('Detail Switch (' . $id . ')');
        $this->tampilkan('Network_Switch_CRUD', $data);
	}

	public function tambah() {
        // set title
        $this->set_title('Tambah Switch');

        // load custom library
        $this->load->library('form_validation');

        // create object
        $data               = new stdClass();
        $data->validasi     = true;
        $data->kode_switch  = 'swh-' . date('Ymd') . '-' . date('His');
        $data->action       = base_url('manage/switch/tambah');
        $data->pops         = $this->pop->get_all();

        // form_validation
        $this->form_validation->set_rules('hostname_switch','Hostname', 'trim|required');
        $this->form_validation->set_rules('ip_addr_switch','IP Address', 'trim|required');
        $this->form_validation->set_rules('tipe_switch','VLAN Kapasitas', 'trim|required');
        $this->form_validation->set_rules('kode_pop','VLAN Satuan', 'trim|required');
        
        // run form_validation
        if ($this->form_validation->run() == FALSE) {
            $this->tampilkan('Network_Switch_CRUD', $data);
        } else {
            // set variable post in array
            $post_data = array(
                'kode_switch'          	=> $this->input->post('kode_switch'),
                'hostname_switch'      	=> $this->input->post('hostname_switch'),
                'ip_addr_switch'       	=> $this->input->post('ip_addr_switch'),
                'tipe_switch'			=> $this->input->post('tipe_switch'),
                'kode_pop'             	=> $this->input->post('kode_pop')
            );

            // insert into table vlan

            if ($this->sw->insert($post_data)) {
                $this->session->set_flashdata('berhasil', 'Berhasil menambah data.');
            } else {
                $this->session->set_flashdata('gagal', 'Gagal menambah data.');
            }

            redirect('manage/switch','refresh');
        }
	}

	public function ubah($id) {
        // set title
        $this->set_title('Ubah Data (' . $id . ')');

        // load custom library
        $this->load->library('form_validation');

        // create object
        $data               = new stdClass();
        $data->validasi     = true;
        $data->kode_switch  = $id;
        $data->action       = base_url('manage/switch/ubah/' . $id);
        $data->pops         = $this->pop->get_all();


        if ($id == '') {
            redirect('manage/switch/tambah');
        }


         // form_validation
        $this->form_validation->set_rules('hostname_switch','Hostname', 'trim|required');
        $this->form_validation->set_rules('ip_addr_switch','IP Address', 'trim|required');
        $this->form_validation->set_rules('tipe_switch','VLAN Kapasitas', 'trim|required');
        $this->form_validation->set_rules('kode_pop','VLAN Satuan', 'trim|required');
        
        // run form_validation
        if ($this->form_validation->run() == FALSE) {
            $this->tampilkan('Network_Switch_CRUD', $data);
        } else {
            // set variable post in array
            $post_data = array(
                'hostname_switch'       => $this->input->post('hostname_switch'),
                'ip_addr_switch'        => $this->input->post('ip_addr_switch'),
                'tipe_switch'           => $this->input->post('tipe_switch'),
                'kode_pop'              => $this->input->post('kode_pop')
            );

            // insert into table vlan

            if ($this->sw->where('kode_switch', $id)->update($post_data)) {
                $this->session->set_flashdata('berhasil', 'Berhasil mengubah data.');
            } else {
                $this->session->set_flashdata('gagal', 'Gagal mengubah data.');
            }

            redirect('manage/switch','refresh');
        }
	}

	public function hapus($id) {
        // create object
        $data = new stdClass();

        // delete data in table
        if ($this->sw->where('kode_switch', $id)->delete()) {
            $this->session->set_flashdata('berhasil', 'Berhasil menghapus data.');
        } else {
            $this->session->set_flashdata('gagal', 'Gagal menghapus data.');
        }

        redirect('manage/switch','refresh');
	}


    public function import() {
        $fileName = time().$_FILES['file']['name'];
         
        $config['upload_path'] = './assets/upload'; //buat folder dengan nama assets di root folder
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
        redirect('excel/');
    }

    public function export() {

    }
}

/* End of file Network_Switch.php */
/* Location: ./application/controllers/Network_Switch.php */