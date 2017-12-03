<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* CI Controller
*/
class Network_Vlan extends MY_Controller {
	
	public function __construct() {
		parent::__construct();

		// load model here
		$this->load->model('model_backbone','bb');
		$this->load->model('model_backbone_detail','bb_detail');
	}
	
	public function index() {
		$this->tampilkan('Network_Vlan');
	}

	public function detail($id) {

	}

	public function tambah() {

	}

	public function ubah($id) {

	}

	public function hapus($id) {

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