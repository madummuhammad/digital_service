<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Layanan extends CI_Model {

	public function website()
	{
		return $this->db->get('layanan_website_toko_online')->result_array();
	}

	public function apps()
	{
		return $this->db->get('layanan_apps')->result_array();
	}

	public function landing_page()
	{
		return $this->db->get('layanan_landing_page')->result_array();
	}

	public function create_website()
	{
		$path='./assets/images/layanan/';
		$type='jpg|png|jpeg';
		$file_name='portofolio';
		$link=form('link');

		$gambar=upload_gambar($path, $type, $file_name);
		if ($gambar==NULL) {
			$data=[
				'link'=>$link,
				'gambar'=>'default.png'
			];
		} else {
			$data=[
				'gambar'=>$gambar,
				'link'=>$link
			];
		}

		$this->db->insert('layanan_website_toko_online',$data);

		$toast=[
			'request'=>'banner',
			'icon'=>'success',
			'title'=>'Tambah Logo Klien Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/layanan/website_dan_toko_online'));
	}

	public function update_website()
	{
		$path='./assets/images/layanan/';
		$type='jpg|png|jpeg';
		$file_name='portofolio';
		$id=form('id');
		$link=form('link');
		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('layanan_website_toko_online')->row_array();

		$gambar=upload_gambar($path, $type, $file_name);

		if ($gambar==NULL) {
			$data=[
				'link'=>$link
			];
		} else {
			$data=[
				'gambar'=>$gambar,
				'link'=>$link
			];
		}

		if ($gambar !== NULL) {
			if ($gambar_lama['gambar'] !== 'default.png') {
				unlink(FCPATH . 'assets/images/layanan/'.$gambar_lama['gambar']);
			}
		}
		$this->db->where('id',$id);
		$this->db->update('layanan_website_toko_online',$data);
		$toast=[
			'request'=>'banner',
			'icon'=>'success',
			'title'=>'Edit Banner Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/layanan/website_dan_toko_online'));
	}

	public function delete_website()
	{
		$id=$this->input->post('id');
		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('layanan_website_toko_online')->row_array();

		$this->db->where('id',$id);
		$this->db->delete('layanan_website_toko_online');

		if ($gambar_lama['gambar'] !== 'default.png') {
			unlink(FCPATH . 'assets/images/layanan/'.$gambar_lama['gambar']);
		}
		$toast=[
			'request'=>'portofolio',
			'icon'=>'warning',
			'title'=>'Hapus Section portofolio Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/layanan/website_dan_toko_online'));
	}

	public function create_apps()
	{
		$path='./assets/images/layanan/';
		$type='jpg|png|jpeg';
		$file_name='portofolio';
		$link=form('link');

		$gambar=upload_gambar($path, $type, $file_name);
		if ($gambar==NULL) {
			$data=[
				'link'=>$link,
				'gambar'=>'default.png'
			];
		} else {
			$data=[
				'gambar'=>$gambar,
				'link'=>$link
			];
		}

		$this->db->insert('layanan_apps',$data);

		$toast=[
			'request'=>'banner',
			'icon'=>'success',
			'title'=>'Tambah Logo Klien Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/layanan/apps'));
	}

	public function update_apps()
	{
		$path='./assets/images/layanan/';
		$type='jpg|png|jpeg';
		$file_name='portofolio';
		$id=form('id');
		$link=form('link');
		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('layanan_apps')->row_array();

		$gambar=upload_gambar($path, $type, $file_name);

		if ($gambar==NULL) {
			$data=[
				'link'=>$link
			];
		} else {
			$data=[
				'gambar'=>$gambar,
				'link'=>$link
			];
		}

		if ($gambar !== NULL) {
			if ($gambar_lama['gambar'] !== 'default.png') {
				unlink(FCPATH . 'assets/images/layanan/'.$gambar_lama['gambar']);
			}
		}
		$this->db->where('id',$id);
		$this->db->update('layanan_apps',$data);
		$toast=[
			'request'=>'banner',
			'icon'=>'success',
			'title'=>'Edit Banner Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/layanan/apps'));
	}

	public function delete_apps()
	{
		$id=$this->input->post('id');
		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('layanan_apps')->row_array();

		$this->db->where('id',$id);
		$this->db->delete('layanan_apps');

		if ($gambar_lama['gambar'] !== 'default.png') {
			unlink(FCPATH . 'assets/images/layanan/'.$gambar_lama['gambar']);
		}
		$toast=[
			'request'=>'portofolio',
			'icon'=>'warning',
			'title'=>'Hapus Section portofolio Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/layanan/apps'));
	}
	
	public function create_landing_page()
	{
		$path='./assets/images/layanan/';
		$type='jpg|png|jpeg';
		$file_name='landing_page';
		$link=form('link');

		$gambar=upload_gambar($path, $type, $file_name);
		if ($gambar==NULL) {
			$data=[
				'link'=>$link,
				'gambar'=>'default.png'
			];
		} else {
			$data=[
				'gambar'=>$gambar,
				'link'=>$link
			];
		}

		$this->db->insert('layanan_landing_page',$data);

		$toast=[
			'request'=>'banner',
			'icon'=>'success',
			'title'=>'Tambah Logo Klien Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/layanan/landing_page'));
	}

	public function update_landing_page()
	{
		$path='./assets/images/layanan/';
		$type='jpg|png|jpeg';
		$file_name='landing_page';
		$id=form('id');
		$link=form('link');
		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('layanan_landing_page')->row_array();

		$gambar=upload_gambar($path, $type, $file_name);

		if ($gambar==NULL) {
			$data=[
				'link'=>$link
			];
		} else {
			$data=[
				'gambar'=>$gambar,
				'link'=>$link
			];
		}

		if ($gambar !== NULL) {
			if ($gambar_lama['gambar'] !== 'default.png') {
				unlink(FCPATH . 'assets/images/layanan/'.$gambar_lama['gambar']);
			}
		}
		$this->db->where('id',$id);
		$this->db->update('layanan_landing_page',$data);
		$toast=[
			'request'=>'banner',
			'icon'=>'success',
			'title'=>'Edit Banner Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/layanan/landing_page'));
	}

	public function delete_landing_page()
	{
		$id=$this->input->post('id');
		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('layanan_landing_page')->row_array();

		$this->db->where('id',$id);
		$this->db->delete('layanan_landing_page');

		if ($gambar_lama['gambar'] !== 'default.png') {
			unlink(FCPATH . 'assets/images/layanan/'.$gambar_lama['gambar']);
		}
		$toast=[
			'request'=>'portofolio',
			'icon'=>'warning',
			'title'=>'Hapus Section portofolio Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/layanan/landing_page'));
	}
	public function create()
	{
		$path='./assets/images/portofolio/';
		$type='jpg|png|jpeg';
		$file_name='landing_page';
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
		$id=form('id');
		$link=form('link');
		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('portofolio')->row_array();

		$gambar=upload_gambar($path, $type, $file_name);

		if ($gambar==NULL) {
			$data=[
				'link'=>$link
			];
		} else {
			$data=[
				'gambar'=>$gambar,
				'link'=>$link
			];
		}


		if ($gambar !== NULL) {
			if ($gambar_lama['gambar'] !== 'default.png') {
				unlink(FCPATH . 'assets/images/portofolio/'.$gambar_lama['gambar']);
			}
			$this->db->where('id',$id);
			$this->db->update('portofolio',$data);
		}
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