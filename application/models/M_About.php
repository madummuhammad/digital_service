<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_About extends CI_Model {

	public function index()
	{

	}

	public function partner()
	{
		$data=$this->db->get('about_partner')->result_array();
		return $data;
	}

	public function counter()
	{
		$data=$this->db->get('home_counter')->row_array();
		return $data;
	}

	public function counter_edit()
	{
		$value1=form('value1');
		$value2=form('value2');
		$value3=form('value3');

		$data=[
			'satu'=>$value1,
			'dua'=>$value2,
			'tiga'=>$value3
		];

		$this->db->where('id',1);
		$this->db->update('home_counter',$data);
		redirect(admin_url('website'));
	}

	public function klien()
	{
		$data=$this->db->get('about_partner')->result_array();
		return $data;
	}

	public function partnercreate()
	{
		$path='./assets/images/logo/';
		$type='jpg|png|jpeg';
		$file_name='partner';

		$gambar=upload_gambar($path, $type, $file_name);
		$data=[
			'logo'=>$gambar
		];

		if ($gambar == NULL) {
			redirect(admin_url('website'));
		} else {
			$this->db->insert('about_partner',$data);
		}

		$toast=[
			'request'=>'banner',
			'icon'=>'success',
			'title'=>'Tambah Logo Klien Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/tentang_kami'));
	}

	public function partneredit()
	{
		$path='./assets/images/logo/';
		$type='jpg|png|jpeg';
		$file_name='partner';
		$id=form('id');
		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('about_partner')->row_array();

		$gambar=upload_gambar($path, $type, $file_name);

		if ($gambar !== NULL) {
			if ($gambar_lama['logo'] !== 'default.png') {
				unlink(FCPATH . 'assets/images/logo/'.$gambar_lama['logo']);
			}
			$this->db->where('id',$id);
			$this->db->update('about_partner',['logo'=>$gambar]);
		}
		$toast=[
			'request'=>'banner',
			'icon'=>'success',
			'title'=>'Edit Banner Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/tentang_kami'));
	}

	public function partnerdelete()
	{
		$id=form('id');
		$this->db->where('id',$id);
		$this->db->delete('about_partner');
		$toast=[
			'request'=>'banner',
			'icon'=>'warning',
			'title'=>'Hapus Logo Klien Berhasil'
		];
		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('about_partner')->row_array();
		$this->session->set_flashdata($toast);
		unlink(FCPATH . 'assets/images/logo/'.$gambar_lama['logo']);
		redirect(admin_url('website/tentang_kami'));
	}

}
