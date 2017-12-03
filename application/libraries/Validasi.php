<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Validasi
*/
class Validasi {
	private $CI;

	public function __construct() {
		$this->CI =& get_instance();
		$this->CI->load->library('form_validation');
	}

	public function set_rules($nama, $nama_alias, $rules = array(), $default = true) {
		if ($default) {
			return $this->CI->form_validation->set_rules($nama, $nama_alias, $rules);
		} else {
			if(is_array($rules) && count($rules) >= 1) {
				foreach ($rules as $rule => $value) {
					switch ($value) {
						case 'required':
							$rules_msg['required'] = '%s tidak boleh kosong.';
							break;
						case 'min_length':
							$rules_msg['min_length'] = '{field} harus lebih dari {param} karakter.';
							break;
						case 'max_length':
							$rules_msg['max_length'] = '{field} tidak boleh lebih dari {param} karakter.';
							break;
						case 'numeric':
							$rules_msg['numeric'] = '%s harus berisi angka.';
							break;
						case 'valid_email':
							$rules_msg['valid_email'] = '%s harus email.';
							break;
						case 'matches':
							$rules_msg['matches'] = '%s tidak sesuai.';
							break;
						case 'is_unique':
							$rules_msg['is_unique'] = '%s sudah ada.';
							break;
						case 'greater_than':
							$rules_msg['greater_than'] = '{field} harus lebih dari {param}.';
							break;
						case 'greater_than_equal_to':
							$rules_msg['greater_than_equal_to'] = '{field} harus lebih dari atau sama dengan {param}.';
							break;
						case 'less_than':
							$rules_msg['less_than'] = '{field} harus kurang dari {param}.';
							break;
						case 'less_than_equal_to':
							$rules_msg['less_than_equal_to'] = '{field} harus kurang dari atau sama dengan {param}.';
							break;
					}
				}
			}

			return $this->CI->form_validation->set_rules($nama, $nama_alias, $rules, $rules_msg);
		}
		
	}

	public function validation() {
		if ($this->CI->form_validation->run() == FALSE) {
			return false;
		} else {
			return true;
		}
	}



}

/* End of file Validasi.php */
/* Location: ./application/libraries/Validasi.php */