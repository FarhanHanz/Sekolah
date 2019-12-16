<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_guru extends CI_model {

	public function tg()
	{
		return $this->db->get('guru');
	}

	public function save($data)
	{
		 return $this->db->insert('guru',$data);
	}

	public function getid($nip)
	{
		$param=array('nip' => $nip);
		return $this->db->get_where('guru',$param);
	}

	public function update($data,$nip)
	{
		$this->db->where('nip',$nip);
		$this->db->update('guru',$data);
	}
}