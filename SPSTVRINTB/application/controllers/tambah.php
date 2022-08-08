<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('mtambah');
	}

	public function index()
	{
		$this->msecurity->getsecurity();
		$data['hari'] = 0;
		$data['thari'] = 1;
		$data['tambah'] = $this->mtambah->GetTambah(0);
		$data['ttambah'] = $this->mtambah->GetTambah(1);
		$data['tambah2'] = $this->mtambah->GetTambah2();
		$data['tambah3'] = $this->mtambah->GetTambah3();
		
		$data['karac'] = $this->mtambah->GetKarakterAcara();
		$data['sumac'] = $this->mtambah->GetSumberAcara();
		$data['namik'] = $this->mtambah->GetNamaIklan();
		$data['jamik'] = $this->mtambah->GetJamIklan();
		$data['desik'] = $this->mtambah->GetDeskripsiIklan();
		$data['tips'] = $this->mtambah->GetTips();

		$data['ps'] = $this->mtambah->GetPengarahSiaran();
		$data['pab'] = $this->mtambah->GetPengarahAcaraBerita();
		$data['pas'] = $this->mtambah->GetPengarahAcaraSiaran();
		$data['apa'] = $this->mtambah->GetAssPengarahAcara();
		$data['pr'] = $this->mtambah->GetPenyusunRundown();
		$data['of'] = $this->mtambah->GetOperatoFTP();
		$data['prs'] = $this->mtambah->GetPenataRias();
		$data['pt'] = $this->mtambah->GetPengarahTeknik();
		$data['fp'] = $this->mtambah->GetFPUPemancar();
		$data['k'] = $this->mtambah->GetKamerawan();
		$data['psu'] = $this->mtambah->GetPenataSuara();
		$data['pc'] = $this->mtambah->GetPenataCahaya();
		$data['ocv'] = $this->mtambah->GetOprChargenVTR();
		$data['mu'] = $this->mtambah->GetManajerUnit();
		$data['eb'] = $this->mtambah->GetEditorBerita();
		$data['pa'] = $this->mtambah->GetPenataArtistik();
		$data['pse'] = $this->mtambah->GetPenataSet();
		$data['pg'] = $this->mtambah->GetPemanduGambar();

		$this->template->load('index', 'lokal', $data);
	}

	public function digital()
	{
		$this->msecurity->getsecurity();
		$this->template->load('index', 'digital');
	}

	public function h()
	{
		$this->msecurity->getsecurity();
		$tes2 = $this->uri->segment(3);
		$data['hari'] = $tes2;
		if ($tes2==6) {
			$data['thari'] = $tes2-6;
			$data['ttambah'] = $this->mtambah->GetTambah($tes2-6);
		}
		else {
			$data['thari'] = $tes2+1;
			$data['ttambah'] = $this->mtambah->GetTambah($tes2+1);
		}
		$data['tambah'] = $this->mtambah->GetTambah($tes2);
		$data['tambah2'] = $this->mtambah->GetTambah2();
		$data['tambah3'] = $this->mtambah->GetTambah3();

		$data['karac'] = $this->mtambah->GetKarakterAcara();
		$data['sumac'] = $this->mtambah->GetSumberAcara();
		$data['namik'] = $this->mtambah->GetNamaIklan();
		$data['jamik'] = $this->mtambah->GetJamIklan();
		$data['desik'] = $this->mtambah->GetDeskripsiIklan();
		$data['tips'] = $this->mtambah->GetTips();
		
		$data['ps'] = $this->mtambah->GetPengarahSiaran();
		$data['pab'] = $this->mtambah->GetPengarahAcaraBerita();
		$data['pas'] = $this->mtambah->GetPengarahAcaraSiaran();
		$data['apa'] = $this->mtambah->GetAssPengarahAcara();
		$data['pr'] = $this->mtambah->GetPenyusunRundown();
		$data['of'] = $this->mtambah->GetOperatoFTP();
		$data['prs'] = $this->mtambah->GetPenataRias();
		$data['pt'] = $this->mtambah->GetPengarahTeknik();
		$data['fp'] = $this->mtambah->GetFPUPemancar();
		$data['k'] = $this->mtambah->GetKamerawan();
		$data['psu'] = $this->mtambah->GetPenataSuara();
		$data['pc'] = $this->mtambah->GetPenataCahaya();
		$data['ocv'] = $this->mtambah->GetOprChargenVTR();
		$data['mu'] = $this->mtambah->GetManajerUnit();
		$data['eb'] = $this->mtambah->GetEditorBerita();
		$data['pa'] = $this->mtambah->GetPenataArtistik();
		$data['pse'] = $this->mtambah->GetPenataSet();
		$data['pg'] = $this->mtambah->GetPemanduGambar();
				
		$this->template->load('index', 'lokal', $data);
	}

	public function edit()
	{
		$this->msecurity->getsecurity();
		$id2 = $this->input->post('id2');
		$desk2 = $this->input->post('desk2');
		$tem2 = $this->input->post('tem2');
		$ber2 = $this->input->post('ber2');
		$kar2 = $this->input->post('kar2');
		$sumb2 = $this->input->post('sumb2');

		$countdesk = $this->mtambah->GetCountDesk();
		$counttema = $this->mtambah->GetCountTema();
		$countbersama = $this->mtambah->GetCountBersama();
		$countdesk1 = $countdesk+1;
		$counttema1 = $counttema+1;
		$countbersama1 = $countbersama+1;

		$object = array(
			'nm_deskripsi' => $desk2,
			'nama_tema' => $tem2,
			'nama_br' => $ber2,
			'karakter' => $kar2,
			'sumber' => $sumb2,
			 );

		$tes = $this->mtambah->Edit2($id2, $countdesk1, $counttema1, $countbersama1, $object);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function editiklan()
	{
		$this->msecurity->getsecurity();
		$idac = $this->input->post('idac');
		$idik = $this->input->post('idik');
		$ji2 = $this->input->post('ji2');
		$ni2 = $this->input->post('ni2');
		$di2 = $this->input->post('di2');

		$object = array(
			'nama_iklan' => $ni2,
			'jam_iklan' => $ji2,
			'deskripsi_iklan' => $di2,
			 );

		$object1 = array(
			'id_acara' => $idac,
			'id_iklan' => $idik,
			 );

		$tes = $this->mtambah->Edit3($idik, $idac, $object, $object1);
		// echo "$id2, $id3, $ji2, $ni2, $di2";
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function edit4()
	{
		$this->msecurity->getsecurity();
		$idst = $this->input->post('idst');
		$nst = $this->input->post('nst');
		$jst = $this->input->post('jst');
		$dst = $this->input->post('dst');
		$kst = $this->input->post('kst');
		$sst = $this->input->post('sst');
		$deskst = $this->input->post('deskst');

		$countdeskst = $this->mtambah->GetCountDeskSt();
		$countdeskst1 = $countdeskst+1;

		$object = array(
			'nama_st' => $nst,
			'jam_st' => $jst,
			'durasi_st' => $dst,
			'karakter_st' => $kst,
			'sumber_st' => $sst,
			 );

		$tes = $this->mtambah->Edit4($idst, $countdeskst1, $deskst, $object);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function tambahiklan()
	{
		$this->msecurity->getsecurity();
		$id2 = $this->input->post('id2');
		$ji2 = $this->input->post('ji2');
		$ni2 = $this->input->post('ni2');
		$di2 = $this->input->post('di2');

		$count = $this->mtambah->GetCountIklan();
		$count2 = $count+1;

		$object = array(
			'idiklan' => $count2,
			'nama_iklan' => $ni2,
			'jam_iklan' => $ji2,
			'deskripsi_iklan' => $di2,
			 );

		$countikac = $this->mtambah->GetCountIkac();
		$countikac1 = $countikac+1;
		// $idhari = $this->mdash->GetIdHari($hari1);

		$object1 = array(
			'id_ikac' => $countikac1,
			'id_acara' => $id2,
			'id_iklan' => $count2,
			 );		

		$cek = $this->mtambah->Insert($object, $object1, $id2);

		// echo $cek;
		// echo "$id2, $ji2, $di2, $ni2, $count2, $countikac1";
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function hapus($id)
	{
		$this->msecurity->getsecurity();
		$tes2 = $this->uri->segment(4);
		$tes = $this->mtambah->Hapus2($id, $tes2);
		redirect($_SERVER['HTTP_REFERER']);
	}

	// public function iklan($idd)
	// {
	// 	$data['tambah7'] = $this->mtambah->GetIklan($idd);
	// 	$this->template->load('index', 'lokal', $data);
	// }

	public function print()
	{
		$this->msecurity->getsecurity();
		$tes3 = $this->uri->segment(3);
		if ($tes3==0) {$data['hari'] = "Senin";}
		if ($tes3==1) {$data['hari'] = "Selasa";}
		if ($tes3==2) {$data['hari'] = "Rabu";}
		if ($tes3==3) {$data['hari'] = "Kamis";}
		if ($tes3==4) {$data['hari'] = "Jumat";}
		if ($tes3==5) {$data['hari'] = "Sabtu";}
		if ($tes3==6) {$data['hari'] = "Minggu";}
		$tgl = $this->input->post('tgl');
		$data['tanggal'] = $tgl;
		$hrn = $this->input->post('hrn');
		$data['hrnasional'] = $hrn;
		$tips = $this->input->post('tips');
		$data['tipsharian'] = $tips;
		$data['tambah'] = $this->mtambah->GetTambah($tes3);
		$data['tambah2'] = $this->mtambah->GetTambah2();
		$data['tambah3'] = $this->mtambah->GetTambah3();
		$this->load->view('jadwalprint', $data);
	}

	public function print2()
	{
		$this->msecurity->getsecurity();
		$tes4 = $this->uri->segment(3);
		if ($tes4==0) {$data['hari'] = "Senin";}
		if ($tes4==1) {$data['hari'] = "Selasa";}
		if ($tes4==2) {$data['hari'] = "Rabu";}
		if ($tes4==3) {$data['hari'] = "Kamis";}
		if ($tes4==4) {$data['hari'] = "Jumat";}
		if ($tes4==5) {$data['hari'] = "Sabtu";}
		if ($tes4==6) {$data['hari'] = "Minggu";}
		$ps = $this->input->post('ps');
		$pab = $this->input->post('pab');
		$pas = $this->input->post('pas');
		$apa = $this->input->post('apa');
		$pr = $this->input->post('pr');
		$of = $this->input->post('of');
		$prs = $this->input->post('prs');
		$pt = $this->input->post('pt');
		$fp = $this->input->post('fp');
		$k = $this->input->post('k');
		$psu = $this->input->post('psu');
		$pc = $this->input->post('pc');
		$ocv = $this->input->post('ocv');
		$mu = $this->input->post('mu');
		$eb = $this->input->post('eb');
		$pa = $this->input->post('pa');
		$pse = $this->input->post('pse');
		$pg = $this->input->post('pg');
		$tg = $this->input->post('tg');
		$tg2 = $this->input->post('tg2');

		$data['ja'] = array($ps, $pab, $pas, $apa, $pr, $of, $prs, $pt, $fp, $k, $psu, $pc, $ocv, $mu, $eb, $pa, $pse, $pg, $tg, $tg2);


		$data['tambah'] = $this->mtambah->GetTambah($tes4);
		$data['tambah2'] = $this->mtambah->GetTambah2();
		$data['tambah3'] = $this->mtambah->GetTambah3();

		$this->load->view('tinjauprint', $data);
	}

	public function editesok()
	{
		$this->msecurity->getsecurity();
		$id2 = $this->input->post('idesok');
		$kar2 = $this->input->post('karesok');
		$sumb2 = $this->input->post('sumbesok');

		$object = array(
			'karakter' => $kar2,
			'sumber' => $sumb2,
			 );

		$tes = $this->mtambah->Editesok2($id2, $object);
		redirect($_SERVER['HTTP_REFERER']);
	}
}
