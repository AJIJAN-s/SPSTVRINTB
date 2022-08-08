<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lainnya extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('mprogram');
	}

	public function index()
	{
		$this->msecurity->getsecurity();
		$data['rekan'] = $this->mprogram->GetRekan();
		$data['birek'] = $this->mprogram->GetBidangRekan();
		$data['tips'] = $this->mprogram->GetTips();
		$this->template->load('index', 'lainnya', $data);
	}

	public function rekankerja()
	{
		$this->msecurity->getsecurity();
		$data['rekan'] = $this->mprogram->GetRekan();
		$data['birek'] = $this->mprogram->GetBidangRekan();
		$data['tips'] = $this->mprogram->GetTips();
		$this->template->load('index', 'lainnya', $data);
	}

	public function tipsharian()
	{
		$this->msecurity->getsecurity();
		$data['rekan'] = $this->mprogram->GetRekan();
		$data['birek'] = $this->mprogram->GetBidangRekan();
		$data['tips'] = $this->mprogram->GetTips();
		$this->template->load('index', 'tips', $data);
	}

	public function tambah()
	{
		$this->msecurity->getsecurity();
		$nama1 = $this->input->post('nm');
		$jam1 = $this->input->post('bd');

		$count = $this->mprogram->GetCount();
		$count1 = $count+1;

		$object = array(
			'idrekan' => $count1,
			'nama_rekan' => $nama1,
			'bidang' => $jam1,
			 );		

		$cek = $this->mprogram->Insert($object);

		// echo "data ".$count1." masuk ".$hari1." pola ".$countpola1;
		// echo $cek;
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function edit()
	{
		$this->msecurity->getsecurity();
		$id2 = $this->input->post('id2');
		$nama2 = $this->input->post('nm2');
		$bidang2 = $this->input->post('bd2');

		$object = array(
			'nama_rekan' => $nama2,
			'bidang' => $bidang2,
			 );

		$tes = $this->mprogram->Edit($id2, $object);
		redirect($_SERVER['HTTP_REFERER']);		
	}

	public function hapus($idrek)
	{
		$this->msecurity->getsecurity();
		$tes = $this->mprogram->Hapus($idrek);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function tambahtips()
	{
		$this->msecurity->getsecurity();
		$nama1 = $this->input->post('nmt');
		$count = $this->mprogram->GetCountTips();
		$count1 = $count+1;

		$object = array(
			'idtips' => $count1,
			'nama_tips' => $nama1,
			 );		

		$cek = $this->mprogram->InsertTips($object);

		// echo "data ".$count1." masuk ".$hari1." pola ".$countpola1;
		// echo $cek;
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function edittips()
	{
		$this->msecurity->getsecurity();
		$id2 = $this->input->post('idt2');
		$nama2 = $this->input->post('nmt2');

		$object = array(
			'nama_tips' => $nama2,
			 );

		$tes = $this->mprogram->EditTips($id2, $object);
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	public function hapustips($idtips)
	{
		$this->msecurity->getsecurity();
		$tes = $this->mprogram->HapusTips($idtips);
		redirect($_SERVER['HTTP_REFERER']);
	}
}
