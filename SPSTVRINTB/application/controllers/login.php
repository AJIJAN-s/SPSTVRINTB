<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$username = $this->session->userdata('username');
		if(!empty($username)){
			redirect('dash');
		}
		else {
			$this->load->view('login');
		}
	}

	public function getlogin(){
		$u = $this->input->post('username');
		$p = $this->input->post('password');
		$this->load->model('mlogin');
		$this->mlogin->GetLogin($u,$p);
	}
}
