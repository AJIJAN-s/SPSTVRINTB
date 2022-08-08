<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtambah extends CI_Model {

	public function GetTambah($dat)
	{
		$tambah = $this->db->query('SELECT * FROM acara WHERE id IN (SELECT id_acara FROM pola WHERE id_hari IN ('.$dat.')) ORDER BY jam ASC;');
		return $tambah;
	}

	public function GetTambah2()
	{
		$tambah2 = $this->db->query('SELECT * FROM statis ORDER BY jam_st ASC LIMIT 4;');
		return $tambah2;
	}

	public function GetTambah3()
	{
		$tambah3 = $this->db->query('SELECT * FROM (SELECT * FROM statis ORDER BY idst DESC LIMIT 4) AS a ORDER BY idst ASC;');
		return $tambah3;
	}

	public function GetKarakterAcara()
	{
		$karac = $this->db->query('SELECT DISTINCT karakter FROM acara ORDER BY karakter ASC');
		return $karac;
	}

	public function GetSumberAcara()
	{
		$sumac = $this->db->query('SELECT DISTINCT sumber FROM acara ORDER BY sumber ASC');
		return $sumac;
	}

	public function GetNamaIklan()
	{
		$namik = $this->db->query('SELECT DISTINCT nama_iklan FROM iklan ORDER BY nama_iklan ASC');
		return $namik;	
	}

	public function GetJamIklan()
	{
		$jamik = $this->db->query('SELECT DISTINCT jam_iklan FROM iklan ORDER BY jam_iklan ASC');
		return $jamik;	
	}

	public function GetDeskripsiIklan()
	{
		$desik = $this->db->query('SELECT DISTINCT deskripsi_iklan FROM iklan ORDER BY deskripsi_iklan ASC');
		return $desik;	
	}

	public function GetTips()
	{
		$tips = $this->db->query('SELECT DISTINCT nama_tips FROM tips ORDER BY nama_tips ASC');
		return $tips;
	}

	public function GetPengarahSiaran()
	{
		$ps = $this->db->query('SELECT nama_rekan FROM rekan WHERE bidang="Pengarah Siaran" ORDER BY nama_rekan ASC');
		return $ps;
	}
	public function GetPengarahAcaraBerita()
	{
		$ps = $this->db->query('SELECT nama_rekan FROM rekan WHERE bidang="Pengarah Acara Berita" ORDER BY nama_rekan ASC');
		return $ps;
	}
	public function GetPengarahAcaraSiaran()
	{
		$ps = $this->db->query('SELECT nama_rekan FROM rekan WHERE bidang="Pengarah Acara Siaran" ORDER BY nama_rekan ASC');
		return $ps;
	}
	public function GetAssPengarahAcara()
	{
		$ps = $this->db->query('SELECT nama_rekan FROM rekan WHERE bidang="Ass. Pengarah Acara" ORDER BY nama_rekan ASC');
		return $ps;
	}
	public function GetPenyusunRundown()
	{
		$ps = $this->db->query('SELECT nama_rekan FROM rekan WHERE bidang="Penyusun Rundown" ORDER BY nama_rekan ASC');
		return $ps;
	}
	public function GetOperatoFTP()
	{
		$ps = $this->db->query('SELECT nama_rekan FROM rekan WHERE bidang="Operator FTP" ORDER BY nama_rekan ASC');
		return $ps;
	}
	public function GetPenataRias()
	{
		$ps = $this->db->query('SELECT nama_rekan FROM rekan WHERE bidang="Penata Rias" ORDER BY nama_rekan ASC');
		return $ps;
	}
	public function GetPengarahTeknik()
	{
		$ps = $this->db->query('SELECT nama_rekan FROM rekan WHERE bidang="Pengarah Teknik" ORDER BY nama_rekan ASC');
		return $ps;
	}
	public function GetFPUPemancar()
	{
		$ps = $this->db->query('SELECT nama_rekan FROM rekan WHERE bidang="FPU / Pemancar" ORDER BY nama_rekan ASC');
		return $ps;
	}
	public function GetKamerawan()
	{
		$ps = $this->db->query('SELECT nama_rekan FROM rekan WHERE bidang="Kamerawan" ORDER BY nama_rekan ASC');
		return $ps;
	}
	public function GetPenataSuara()
	{
		$ps = $this->db->query('SELECT nama_rekan FROM rekan WHERE bidang="Penata Suara" ORDER BY nama_rekan ASC');
		return $ps;
	}
	public function GetPenataCahaya()
	{
		$ps = $this->db->query('SELECT nama_rekan FROM rekan WHERE bidang="Penata Cahaya" ORDER BY nama_rekan ASC');
		return $ps;
	}
	public function GetOprChargenVTR()
	{
		$ps = $this->db->query('SELECT nama_rekan FROM rekan WHERE bidang="Opr. Chargen/VTR" ORDER BY nama_rekan ASC');
		return $ps;
	}
	public function GetManajerUnit()
	{
		$ps = $this->db->query('SELECT nama_rekan FROM rekan WHERE bidang="Manajer Unit" ORDER BY nama_rekan ASC');
		return $ps;
	}		
	public function GetEditorBerita()
	{
		$ps = $this->db->query('SELECT nama_rekan FROM rekan WHERE bidang="Editor Berita" ORDER BY nama_rekan ASC');
		return $ps;
	}
	public function GetPenataArtistik()
	{
		$ps = $this->db->query('SELECT nama_rekan FROM rekan WHERE bidang="Penata Artistik" ORDER BY nama_rekan ASC');
		return $ps;
	}
	public function GetPenataSet()
	{
		$ps = $this->db->query('SELECT nama_rekan FROM rekan WHERE bidang="Penata Set" ORDER BY nama_rekan ASC');
		return $ps;
	}
	public function GetPemanduGambar()
	{
		$ps = $this->db->query('SELECT nama_rekan FROM rekan WHERE bidang="Pemandu Gambar" ORDER BY nama_rekan ASC');
		return $ps;
	}		

	public function GetCountDesk()
	{
		$countdesk = 0;
		$countdesk1 = $this->db->query('SELECT MAX(iddesk) AS maxiddesk FROM deskripsi;')->row();
		return $countdesk = $countdesk1->maxiddesk;
	}

	public function GetCountDeskSt()
	{
		$countdeskst = 0;
		$countdeskst1 = $this->db->query('SELECT MAX(iddeskst) AS maxiddeskst FROM desk_statis;')->row();
		return $countdeskst = $countdeskst1->maxiddeskst;
	}

	public function GetCountTema()
	{
		$counttema = 0;
		$counttema1 = $this->db->query('SELECT MAX(idtema) AS maxidtema FROM tema;')->row();
		return $counttema = $counttema1->maxidtema;
	}

	public function GetCountBersama()
	{
		$countbersmama = 0;
		$countbersmama1 = $this->db->query('SELECT MAX(idbersama) AS maxidbersama FROM bersama;')->row();
		return $countbersmama = $countbersmama1->maxidbersama;
	}

	public function Edit2($id2, $iddesk, $idtem, $idber, $object1)
	{
		$des = $object1['nm_deskripsi'];
		$tem = $object1['nama_tema'];
		$ber = $object1['nama_br'];
		$kar = $object1['karakter'];
		$sumb = $object1['sumber'];

		if ($des=="") {
			$this->db->query('DELETE FROM deskripsi WHERE id_acara='.$id2.';');
		}
		else {
			$cek0 = $this->db->query('SELECT * FROM deskripsi WHERE id_acara='.$id2.';')->num_rows();
			if ($cek0 > 0) {
				$this->db->query('UPDATE deskripsi SET nm_deskripsi="'.$des.'" WHERE id_acara='.$id2.';');	
			}
			else {
				$this->db->query('INSERT INTO deskripsi VALUES ('.$iddesk.', "'.$des.'", '.$id2.');');
			}
		}

		if ($tem=="") {
			$this->db->query('DELETE FROM tema WHERE id_acara='.$id2.';');
		}
		else {
			$cek = $this->db->query('SELECT * FROM tema WHERE id_acara='.$id2.';')->num_rows();
			if ($cek > 0) {
				$this->db->query('UPDATE tema SET nama_tema="'.$tem.'" WHERE id_acara='.$id2.';');	
			}
			else {
				$this->db->query('INSERT INTO tema VALUES ('.$idtem.', "'.$tem.'", '.$id2.');');
			}
		}

		if ($ber=="") {
			$this->db->query('DELETE FROM bersama WHERE id_acara='.$id2.';');
		}
		else {
			$cek2 = $this->db->query('SELECT * FROM bersama WHERE id_acara='.$id2.';')->num_rows();
			if ($cek2 > 0) {
				$this->db->query('UPDATE bersama SET nama_br="'.$ber.'" WHERE id_acara='.$id2.';');	
			}
			else {
				$this->db->query('INSERT INTO bersama VALUES ('.$idber.', "'.$ber.'", '.$id2.');');
			}
		}

		$this->db->query('UPDATE acara SET karakter="'.$kar.'", sumber="'.$sumb.'" WHERE id='.$id2.';');
	}

	public function Edit3($idik, $idac, $object, $object1){
		$this->db->where('id_iklan=',$idik,'id_acara',$idac);
		$this->db->update('iklan_acara', $object1);
		$this->db->where('idiklan',$idik);
		$this->db->update('iklan', $object);
	}

	public function Edit4($idst, $iddeskst, $deskst, $object){
		$this->db->where('idst',$idst);
		$this->db->update('statis', $object);

		if ($deskst=="") {
			$this->db->query('DELETE FROM desk_statis WHERE id_st='.$idst.';');
		}
		else {
			$cek3 = $this->db->query('SELECT * FROM desk_statis WHERE id_st='.$idst.';')->num_rows();
			if ($cek3 > 0) {
				$this->db->query('UPDATE desk_statis SET desk_st="'.$deskst.'" WHERE id_st='.$idst.';');	
			}
			else {
				$this->db->query('INSERT INTO desk_statis VALUES ('.$iddeskst.', "'.$deskst.'", '.$idst.');');
			}
		}
	}

	public function Hapus2($id2, $idi2){
		$cek = $this->db->query('SELECT * FROM iklan_acara WHERE id_iklan='.$id2.';')->num_rows();

		if ($cek > 1) {
			$this->db->query('DELETE FROM iklan_acara WHERE id_iklan='.$id2.' AND id_acara='.$idi2.';');
		}
		else {
		$this->db->query('DELETE FROM iklan WHERE idiklan='.$id2.';');
		$this->db->query('DELETE FROM iklan_acara WHERE id_iklan='.$id2.' AND id_acara='.$idi2.';');
		}
	}

	public function GetCountIklan()
	{
		$count = 0;
		$count1 = $this->db->query('SELECT MAX(idiklan) AS maxid FROM iklan;')->row();
		return $count = $count1->maxid;
	}

	public function GetCountIkac()
	{
		$countikac = 0;
		$countikac1 = $this->db->query('SELECT MAX(id_ikac) AS maxidikac FROM iklan_acara;')->row();
		return $countikac = $countikac1->maxidikac;
	}

	public function Insert($object, $object1, $idac)
	{
		$ni = $object['nama_iklan'];
		$ji = $object['jam_iklan'];
		$di = $object['deskripsi_iklan'];
		$cek = $this->db->query('SELECT * FROM (SELECT * FROM iklan WHERE idiklan IN (SELECT id_iklan FROM iklan_acara WHERE id_acara IN ('.$idac.'))) AS n WHERE nama_iklan="'.$ni.'" AND jam_iklan="'.$ji.'" AND deskripsi_iklan="'.$di.'";')->num_rows();
		$a = "data sudah ada";
		$b = "data belum ada";
		$c = "jam bentrok";
		$d = "nama sudah ada tapi tetap insert baru. Atau hilangkan ?";
		$e = "nama dan jam sudah ada, jadi insert pola doang";

		if ($cek > 0) {
			return $a;
		}
		else {
			$this->db->insert('iklan', $object);
			$this->db->insert('iklan_acara', $object1);
			return $b;
		}
	}	

	public function Editesok2($id2, $object1)
	{
		$kar = $object1['karakter'];
		$sumb = $object1['sumber'];

		$this->db->query('UPDATE acara SET karakter="'.$kar.'", sumber="'.$sumb.'" WHERE id='.$id2.';');
	}

	// public function GetIklan($idd)
	// {
	// 	$this->db->query('SELECT * FROM iklan WHERE idiklan IN (SELECT id_iklan FROM iklan_acara WHERE id_acara IN ('.$idd.')) ORDER BY jam_iklan ASC;');
	// }
}
