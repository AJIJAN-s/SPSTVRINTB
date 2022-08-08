<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct() {
		parent:: __construct();
		$this->load->model('mdash');
	}

	public function index()
	{
		$this->msecurity->getsecurity();
		$data['acara'] = $this->mdash->GetAcara(0);
		$data['hari'] = 0;
		$data['jamac'] = $this->mdash->GetJamAcara();
		$data['durac'] = $this->mdash->GetDurasiAcara();
		$this->template->load('index', 'dashboard', $data);
	}

	public function hari()
	{
		// $this->msecurity->getsecurity();
		// $data['hari'] = $this->mdash->GetHari();
		// $this->template->load('index', 'dashboard', $data);
		$this->msecurity->getsecurity();
		$tes2 = $this->uri->segment(3);
		$data['acara'] = $this->mdash->GetAcara($tes2);
		$data['hari'] = $tes2;
		$data['jamac'] = $this->mdash->GetJamAcara();
		$data['durac'] = $this->mdash->GetDurasiAcara();
		$this->template->load('index', 'dashboard', $data);
	}

	public function tambah()
	{
		$this->msecurity->getsecurity();
		$nama1 = $this->input->post('nm');
		$jam1 = $this->input->post('jm');
		$durasi1 = $this->input->post('dr');
		$hari1 = $this->input->post('hr');

		$count = $this->mdash->GetCount();
		$count1 = $count+1;

		$object = array(
			'id' => $count1,
			'nama' => $nama1,
			'jam' => $jam1,
			'durasi' => $durasi1,
			'karakter' => "P/B",
			'sumber' => "Komputer",
			 );

		$countpola = $this->mdash->GetCountPola();
		$countpola1 = $countpola+1;
		// $idhari = $this->mdash->GetIdHari($hari1);

		$object1 = array(
			'idpola' => $countpola1,
			'id_acara' => $count1,
			'id_hari' => $hari1,
			 );		

		$cek = $this->mdash->Insert($object, $object1, $hari1);

		// echo "data ".$count1." masuk ".$hari1." pola ".$countpola1;
		// echo $cek;
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function edit(){
		$this->msecurity->getsecurity();
		$id2 = $this->input->post('id2');
		$nama2 = $this->input->post('nm2');
		$jam2 = $this->input->post('jm2');
		$durasi2 = $this->input->post('dr2');
		$hari2 = $this->input->post('hr2');

		$object = array(
			'nama' => $nama2,
			'jam' => $jam2,
			'durasi' => $durasi2,
			 );

		$object1 = array(
			'id_acara' => $id2,
			'id_hari' => $hari2,
			 );

		$tes = $this->mdash->Edit2($id2, $hari2, $object, $object1);
		redirect($_SERVER['HTTP_REFERER']);

		// $tes2 = $this->uri->segment(4);
		// $tes = $this->mdash->Edit2($id, $tes2);
		// echo $id; 
		// echo $tes2;

		// $id = $this->input->post('id');
	 //    $data = array(
	 //        'nama'		=> $this->input->post('nama'),
	 //        'jam'	=> $this->input->post('jam'),
	 //        'id'	=> $this->input->post('id')
  //   		);
	    // $this->model_admin->ubah($data,$id);
	    // $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	    // redirect('admin');
	    
	}

	public function hapus($id){
		$this->msecurity->getsecurity();
		$tes2 = $this->uri->segment(4);
		$tes = $this->mdash->Hapus2($id, $tes2);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function profile(){
		$this->msecurity->getsecurity();
		$data['akun'] = $this->mdash->GetAkun(); 
		$this->template->load('index', 'profile', $data);
	}

	public function calendar(){
		$this->msecurity->getsecurity();
		$this->template->load('index', 'calendar');
	}	

	public function logout(){
		$this->msecurity->getsecurity();
		$this->session->sess_destroy();
		redirect('login');
	}

}
