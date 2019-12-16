<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_guru');
	}

	public function index()
	{
		$data['judul']="Tampil Data Guru";
		$data['tampil']=$this->M_guru->tg()->result();	
		$this->load->view('guru/tampil', $data, FALSE);
	}

	public function input()
	{	
		$data['judul']="Input Data Guru Baru";
		$this->load->view('guru/input', $data, FALSE);
	}

	public function save()
	{
		$data=array(
		'nip'=>$this->input->post('nip'),
		'nama'=>$this->input->post('nama'),
		'email'=>$this->input->post('email'),
		'jk'=>$this->input->post('jk')
		);

		$this->M_guru->save($data);
		redirect('guru','refresh');
	}

	public function update()
	{
		$id=$this->input->post('nip');
		$data=array(
		'nip'=>$this->input->post('nip'),
		'nama'=>$this->input->post('nama'),
		'email'=>$this->input->post('email'),
		'jk'=>$this->input->post('jk')
		);

		$this->M_guru->update($data,$nip);
		redirect('guru','refresh');
	}

	public function edit()
	{
		$id=$this->uri->segment(3);
		$data['judul']="Edit Data Guru";
		$data['edit']=$this->M_guru->getid($id)->row_array();
		$this->load->view('guru/edit', $data, FALSE);
	}

	public function delete()
	{
		$id=$this->uri->segment(3);
		$this->db->where('nip', $id);
		$this->db->delete('guru');
		redirect('guru','refresh');
	}
}