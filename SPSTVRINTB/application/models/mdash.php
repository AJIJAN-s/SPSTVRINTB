<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdash extends CI_Model {

	public function GetAcara($ddo)
	{
		$acara = $this->db->query('SELECT * FROM acara WHERE id IN (SELECT id_acara FROM pola WHERE id_hari IN ('.$ddo.')) ORDER BY jam ASC;');
		return $acara;
	}

	public function GetJamAcara()
	{
		$jamac = $this->db->query('SELECT DISTINCT jam FROM acara ORDER BY jam ASC');
		return $jamac;
	}
	
	public function GetDurasiAcara()
	{
		$durac = $this->db->query('SELECT DISTINCT durasi FROM acara ORDER BY durasi ASC');
		return $durac;
	}	

	// public function cek(){
	// 	$cek = mysql_num_rows(mysql_query('SELECT nama FROM acara WHERE nama=""'))
	// }

	public function Insert($object1, $object2, $hari3)
	{
		$nm = $object1['nama'];
		$jm = $object1['jam'];
		$cek = $this->db->query('SELECT jam FROM (SELECT * FROM acara WHERE id IN (SELECT id_acara FROM pola WHERE id_hari IN ('.$hari3.'))) AS n WHERE jam="'.$jm.'";')->num_rows();
		$cek2 = $this->db->query('SELECT nama FROM (SELECT * FROM acara WHERE id IN (SELECT id_acara FROM pola WHERE id_hari IN ('.$hari3.'))) AS n WHERE nama="'.$nm.'";')->num_rows();
		$cek3 = $this->db->query('SELECT nama, jam FROM acara WHERE nama="'.$nm.'" AND jam="'.$jm.'";')->num_rows();
		$a = "data sudah ada";
		$b = "data belum ada";
		$c = "jam bentrok";
		$d = "nama sudah ada tapi tetap insert baru. Atau hilangkan ?";
		$e = "nama dan jam sudah ada, jadi insert pola doang";

		if ($cek > 0 && $cek2 >0) {
			return $a;
		}
		else if ($cek > 0) {
			// $ada = $this->db->query('SELECT jam FROM acara WHERE jam="'.$jm.'";')->num_rows();
			// if ($ada > 0) {
			// 	$ada2 = $this->db->query('SELECT jam AS j FROM acara WHERE nama="'.$nm.'";');
			// 	return $ada2->j;
			// }
			// else {
			// 	return $b;
			// }
			return $c;
		}
		else if ($cek2 > 0) {
			$this->db->insert('acara', $object1);
			$this->db->insert('pola', $object2);			
			return $d;
		}
		else {
			if ($cek3 > 0) {
				$idp = $object2['idpola'];
				$idh = $object2['id_hari'];
				$idac = $this->db->query('SELECT id AS idc FROM acara WHERE nama="'.$nm.'" AND jam="'.$jm.'";')->row();
				$idaca = $idac->idc; 
				$this->db->query('INSERT INTO pola VALUES ('.$idp.', '.$idaca.', '.$idh.');');
				return $e;
			}
			else {
				$this->db->insert('acara', $object1);
				$this->db->insert('pola', $object2);
				return $b;
			}
		}

		// if (nama sama && jam sama && hari sama) {
		// 	tidak bisa insert
		// }
		// elseif (jam sama && hari sama) {
		// 	tidak bisa
		// }
		// elseif (nama sama) {
		// 	insert pola doang dengan id acara yg sama
		// }
		// else {
		// 	insert baru di acara dan pola
		// }

		// $this->db->insert('acara', $object1);
		// $this->db->insert('pola', $object2);
	}

	public function GetCount()
	{
		$count = 0;
		$count1 = $this->db->query('SELECT MAX(id) AS maxid FROM acara;')->row();
		return $count = $count1->maxid;
	}

	public function GetCountPola()
	{
		$countpola = 0;
		$countpola1 = $this->db->query('SELECT MAX(idpola) AS maxidpola FROM pola;')->row();
		return $countpola = $countpola1->maxidpola;
	}

	public function GetIdHari($hari2)
	{
		$idhari1 = "";
		$idhari2 = $this->db->query('SELECT idhari AS idhr FROM hari WHERE nm_hari="'.$hari2.'";')->row();
		return $idhari1 = $idhari2->idhr;
	}

	public function Edit2($id2, $hr2, $object2, $object3){
		$this->db->where('id_acara=',$id2,'id_hari',$hr2);
		$this->db->update('pola', $object3);
		$this->db->where('id',$id2);
		$this->db->update('acara', $object2);
	}

	public function Hapus2($id2, $hr2){
		// $idpola = 0;
		// $idpola2 = $this->db->query('SELECT idpola AS idpl FROM pola WHERE id_acara='.$id2.' AND id_hari='.$hr2.';')->row();
		// return $idpola = $idpola2->idpl;

		$cek = $this->db->query('SELECT * FROM pola WHERE id_acara='.$id2.';')->num_rows();

		if ($cek > 1) {
			$this->db->query('DELETE FROM pola WHERE id_acara='.$id2.' AND id_hari='.$hr2.';');
		}
		else {
		$this->db->query('DELETE FROM acara WHERE id='.$id2.';');
		$this->db->query('DELETE FROM pola WHERE id_acara='.$id2.' AND id_hari='.$hr2.';');
		}
		
		// $this->db->query('DELETE FROM acara WHERE id='.$id2.';');
		// $hapus1 = $this->db->query('DELETE FROM acara WHERE id='.$id.';');
		// return $hapus1;

		// $a= $this->hr;
		// global $coba;
		// $a  = 10;
		// return $coba;

		// $this->db->query('SELECT idpola FROM pola WHERE id_acara=8 AND id_hari='.$a.';');
	}

	public function GetAkun()
	{
		$akun =  $this->session->get_userdata();
		return $akun; 
	}
}
