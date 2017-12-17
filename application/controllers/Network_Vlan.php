<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI Controller
*/
class Network_Vlan extends MY_Controller {
	
	public function __construct() {
		parent::__construct();

		// load model here
		$this->load->model('Model_Vlan','vlan');
        $this->load->model('Model_Pop','pop');
	}
	
	public function index() {
		// create object
        $data = new stdClass();

        // load all data in table
        $data->all_records = $this->vlan->with_pop('fields:nama_pop|order_by:nama_pop, asc')->get_all();

        // show view with data
        $this->set_title('VLAN');
        $this->tampilkan('Network_Vlan', $data);
	}

	public function detail($id) {
        // create object
        $data           = new stdClass();
        $data->validasi = false;
        $data->kode_vlan= $id;
        $data->action   = base_url('manage/vlan/ubah/' . $id);
        $data->pops     = $this->pop->get_all();


        if ($id == '') {
            redirect('manage/vlan/tambah');
        }

        // select data from id
        $data->record = $this->vlan->where('kode_vlan', $id)->get();

        // show view with data
        $this->set_title('Detail VLAN (' . $id . ')');
        $this->tampilkan('Network_Vlan_CRUD', $data);
	}

	public function tambah() {
        // set title
        $this->set_title('Tambah VLAN');

        // load custom library
        $this->load->library('form_validation');

        // create object
        $data           = new stdClass();
        $data->validasi = true;
        $data->kode_vlan= 'vln-' . date('Ymd') . '-' . date('His');
        $data->action   = base_url('manage/vlan/tambah');
        $data->pops     = $this->pop->get_all();

        // form_validation
        $this->form_validation->set_rules('vlan_id','VLAN ID', 'trim|required|is_unique[vlan.vlan_id]');
        $this->form_validation->set_rules('vlan_vendor','VLAN_Vendor', 'trim|required');
        $this->form_validation->set_rules('vlan_kapasitas','VLAN Kapasitas', 'trim|required|integer');
        $this->form_validation->set_rules('vlan_satuan','VLAN Satuan', 'trim|required');
        
        // run form_validation
        if ($this->form_validation->run() == FALSE) {
            $this->tampilkan('Network_Vlan_CRUD', $data);
        } else {
            // set variable post in array
            $post_data = array(
                'kode_vlan'            => $this->input->post('kode_vlan'),
                'vlan_id'              => $this->input->post('vlan_id'),
                'vlan_vendor'          => $this->input->post('vlan_vendor'),
                'vlan_kapasitas'       => $this->input->post('vlan_kapasitas'),
                'vlan_satuan'          => $this->input->post('vlan_satuan'),
                'kode_pop'             => $this->input->post('kode_pop')
            );

            // insert into table vlan

            if ($this->vlan->insert($post_data)) {
                $this->session->set_flashdata('berhasil', 'Berhasil menambah data.');
            } else {
                $this->session->set_flashdata('gagal', 'Gagal menambah data.');
            }

            redirect('manage/vlan','refresh');
        }
	}

	public function ubah($id) {
        // set title
        $this->set_title('Ubah Data (' . $id . ')');


        // load custom library
        $this->load->library('form_validation');

        // create object
        $data            = new stdClass();
        $data->validasi  = true;
        $data->kode_vlan = $id;
        $data->action    = base_url('manage/vlan/ubah/' . $id);

        if ($id == '') {
            redirect('manage/vlan/tambah');
        }

        // form_validation
        // form_validation
        $this->form_validation->set_rules('vlan_id','VLAN ID', 'trim|required');
        $this->form_validation->set_rules('vlan_vendor','VLAN_Vendor', 'trim|required');
        $this->form_validation->set_rules('vlan_kapasitas','VLAN Kapasitas', 'trim|required|integer');
        $this->form_validation->set_rules('vlan_satuan','VLAN Satuan', 'trim|required');

        // run form_validation
        if ($this->form_validation->run() == FALSE) {
            $this->tampilkan('Network_Vlan_CRUD', $data);
        } else {
            // set variable post in array
            $post_data = array(
                'vlan_id'              => $this->input->post('vlan_id'),
                'vlan_vendor'          => $this->input->post('vlan_vendor'),
                'vlan_kapasitas'       => $this->input->post('vlan_kapasitas'),
                'vlan_satuan'          => $this->input->post('vlan_satuan'),
                'kode_pop'             => $this->input->post('kode_pop')
            );

            // insert into table vlan

            if ($this->vlan->where('kode_vlan', $id)->update($post_data)) {
                $this->session->set_flashdata('berhasil', 'Berhasil mengubah data.');
            } else {
                $this->session->set_flashdata('gagal', 'Gagal mengubah data.');
            }

            redirect('manage/vlan','refresh');
        }
	}

	public function hapus($id) {
        // create object
        $data = new stdClass();

        if ($id == '') {
            redirect('manage/vlan/tambah');
        }

        // delete data in table
        if ($this->vlan->where('kode_vlan', $id)->delete()) {
            $this->session->set_flashdata('berhasil', 'Berhasil menghapus data.');
        } else {
            $this->session->set_flashdata('gagal', 'Gagal menghapus data.');
        }

        redirect('manage/vlan','refresh');
	}

	public function upload() {
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
        redirect('manage/vlan');
    }
}

/* End of file Network_Vlan.php */
/* Location: ./application/controllers/Network_Vlan.php */