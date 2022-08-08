<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {

	public function GetLogin($u,$p)
	{
		$pwd = md5($p);
		$this->db->where('username',$u);
		$this->db->where('password',$p);
		$query = $this->db->get('user');
		if ($query->num_rows()>0) {
			foreach ($query->result() as $row) {
				$sess = array('username' => $row->username, 'password' => $row->password);
				$this->session->set_userdata($sess);
				redirect('dash');
			}
		}
		else {
			$this->session->set_flashdata('info','Username atau password salah');
			redirect('login');
		}
	}
}
