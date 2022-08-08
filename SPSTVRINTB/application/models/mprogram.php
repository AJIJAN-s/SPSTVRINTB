<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mprogram extends CI_Model {

	public function GetRekan()
	{
		$rekan = $this->db->query('SELECT * FROM rekan ORDER BY nama_rekan ASC');
		return $rekan;
	}

	public function GetBidangRekan()
	{
		$birek = $this->db->query('SELECT DISTINCT bidang FROM rekan ORDER BY bidang ASC');
		return $birek;
	}

	public function GetCount()
	{
		$count = 0;
		$count1 = $this->db->query('SELECT MAX(idrekan) AS maxid FROM rekan;')->row();
		return $count = $count1->maxid;
	}

	public function Insert($object1)
	{
		$nm = $object1['nama_rekan'];
		$bd = $object1['bidang'];
		$cek = $this->db->query('SELECT nama_rekan FROM rekan WHERE nama_rekan="'.$nm.'" AND bidang="'.$bd.'";')->num_rows();
		$a = "data sudah ada";
		$b = "data belum ada";

		if ($cek > 0) {
			return $a;
		}
		else {
			$this->db->insert('rekan', $object1);
			return $b;
		}
	}

	public function Edit($id2, $object1)
	{
		$this->db->where('idrekan=',$id2);
		$this->db->update('rekan', $object1);		
	}

	public function Hapus($id2)
	{
		$this->db->query('DELETE FROM rekan WHERE idrekan='.$id2.';');
	}

	public function GetTips()
	{
		$tips = $this->db->query('SELECT * FROM tips ORDER BY nama_tips ASC');
		return $tips;
	}

	public function GetCountTips()
	{
		$count = 0;
		$count1 = $this->db->query('SELECT MAX(idtips) AS maxid FROM tips;')->row();
		return $count = $count1->maxid;
	}	

	public function InsertTips($object1)
	{
		$nm = $object1['nama_tips'];
		$cek = $this->db->query('SELECT nama_tips FROM tips WHERE nama_tips="'.$nm.'";')->num_rows();
		$a = "data sudah ada";
		$b = "data belum ada";

		if ($cek > 0) {
			return $a;
		}
		else {
			$this->db->insert('tips', $object1);
			return $b;
		}
	}

	public function EditTips($id2, $object1)
	{
		$this->db->where('idtips=',$id2);
		$this->db->update('tips', $object1);		
	}	
	
	public function HapusTips($id2)
	{
		$this->db->query('DELETE FROM tips WHERE idtips='.$id2.';');
	}

}
