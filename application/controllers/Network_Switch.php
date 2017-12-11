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
        $data->record = $this->switch->get($id);

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
        $this->form_validation->set_rules('hostname_switch','Hostname', 'trim|required|is_unique[switch.kode_switch]');
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

            if ($this->sw->insert($post_data, true)) {
                $data->berhasil = 'Berhasil menambah data.';
            } else {
                $data->gagal = 'Gagal menambah data.';
            }

            $this->tampilkan('Network_Switch_CRUD', $data);
        }
	}

	public function ubah($id) {

	}

	public function hapus($id) {

	}
}

/* End of file Network_Switch.php */
/* Location: ./application/controllers/Network_Switch.php */