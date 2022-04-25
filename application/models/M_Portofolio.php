<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Portofolio extends CI_Model {

	public function index()
	{
		$this->db->join('portofolio_jenis','portofolio.id_jenis=portofolio_jenis.id_jenis');
		return $this->db->get('portofolio')->result_array();
	}

	public function jenis()
	{
		return $this->db->get('portofolio_jenis')->result_array();
	}
	
	public function create()
	{
		$path='./assets/images/portofolio/';
		$type='jpg|png|jpeg';
		$file_name='portofolio';
		$id_jenis=form('jenis');
		$link=form('link');

		$gambar=upload_gambar($path, $type, $file_name);
		if ($gambar==NULL) {
			$data=[
				'link'=>$link,
				'id_jenis'=>$id_jenis
			];
		} else {
			$data=[
				'gambar'=>$gambar,
				'link'=>$link,
				'id_jenis'=>$id_jenis
			];
		}

		if ($gambar == NULL) {
			redirect(admin_url('website/portofolio'));
		} else {
			$this->db->insert('portofolio',$data);
		}

		$toast=[
			'request'=>'banner',
			'icon'=>'success',
			'title'=>'Tambah Logo Klien Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/portofolio'));
	}

	public function update()
	{
		$path='./assets/images/portofolio/';
		$type='jpg|png|jpeg';
		$file_name='portofolio';
		$id_jenis=form('jenis');
		$id=form('id');
		$link=form('link');
		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('portofolio')->row_array();

		$gambar=upload_gambar($path, $type, $file_name);

		if ($gambar==NULL) {
			$data=[
				'link'=>$link,
				'id_jenis'=>$id_jenis,
			];
		} else {
			$data=[
				'gambar'=>$gambar,
				'id_jenis'=>$id_jenis,
				'link'=>$link
			];
		}



		if ($gambar !== NULL) {
			if ($gambar_lama['gambar'] !== 'default.png') {
				unlink(FCPATH . 'assets/images/portofolio/'.$gambar_lama['gambar']);
			}
		}
		$this->db->where('id',$id);
		$this->db->update('portofolio',$data);
		$toast=[
			'request'=>'banner',
			'icon'=>'success',
			'title'=>'Edit Banner Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/portofolio'));
	}

	public function delete()
	{
		$id=$this->input->post('id');
		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('portofolio')->row_array();

		$this->db->where('id',$id);
		$this->db->delete('portofolio');

		if ($gambar_lama['gambar'] !== 'default.png') {
			unlink(FCPATH . 'assets/images/portofolio/'.$gambar_lama['gambar']);
		}
		$toast=[
			'request'=>'portofolio',
			'icon'=>'warning',
			'title'=>'Hapus Section portofolio Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/portofolio'));
	}
}