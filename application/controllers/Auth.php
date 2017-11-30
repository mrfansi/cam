<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* CI Controller
*/
class Auth extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index() {
		$this->load->view('Auth');
	}

	public function login() {
		// deklarasi object
		$data = new stdClass();

		// buat validasi input
		$this->form_validation->set_rules('username', 'Username', 'trim|required', array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('password', 'Password', 'trim|required', array('required' => '%s tidak boleh kosong.'));

		if ($this->form_validation->run() == FALSE) {
			// alihkan kembali jika validasi gagal
			$this->index();
		} else {
			// store username dan password
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if ($username == 'core' && $password == 'core') {
				// load session
				$this->load->library('session');

				// store status ke session
				$logged = array(
					'user_loggedin'			=> true,
					'user_datetimelogin'	=> date('Y-m-d H:i:s'),
					'user_id'				=> $username
				);
				$this->session->set_userdata($logged);

				// alihkan ke halaman dashboard
				redirect('/');
			} else {
				$data->gagal = 'Username atau Password salah!.';
				$this->load->view('Auth', $data);
			}
		}

	}


	public function logout() {
		// load session
		$this->load->library('session');

		// hapus session
		$this->session->sess_destroy();

		// buat pesan
		$this->session->set_flashdata('pesan', 'Anda sudah keluar.');

		// redirect to login
		redirect('auth/login');
	}
}


/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */