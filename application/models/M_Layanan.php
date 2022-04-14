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

	public function landing_page_logo()
	{
		return $this->db->get('landing_page_logo')->result_array();
	}

	public function digital_marketing()
	{
		return $this->db->get('layanan_digital_marketing')->result_array();
	}

	public function digital_marketing_logo()
	{
		return $this->db->get('layanan_digital_marketing_logo')->result_array();
	}

	public function agency()
	{
		return $this->db->get('agency')->result_array();
	}

	public function create_landing_page_logo()
	{
		$path='./assets/images/layanan/';
		$type='jpg|png|jpeg';
		$file_name='logo-';

		$gambar=upload_gambar($path, $type, $file_name);
		$data=[
			'logo'=>$gambar
		];

		if ($gambar == NULL) {
			redirect(admin_url('website/layanan/landing_page'));
		} else {
			$this->db->insert('landing_page_logo',$data);
		}

		$toast=[
			'request'=>'banner',
			'icon'=>'success',
			'title'=>'Tambah Logo Klien Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/layanan/landing_page'));
	}

	public function update_landing_page_logo()
	{
		$path='./assets/images/layanan/';
		$type='jpg|png|jpeg';
		$file_name='logo-';
		$id=form('id');
		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('landing_page_logo')->row_array();

		$gambar=upload_gambar($path, $type, $file_name);

		if ($gambar !== NULL) {
			if ($gambar_lama['logo'] !== 'default.png') {
				unlink(FCPATH . 'assets/images/layanan/'.$gambar_lama['logo']);
			}
			$this->db->where('id',$id);
			$this->db->update('landing_page_logo',['logo'=>$gambar]);
		}
		$toast=[
			'request'=>'banner',
			'icon'=>'success',
			'title'=>'Edit Banner Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/layanan/landing_page'));
	}

	public function delete_landing_page_logo()
	{
		$id=form('id');
		$this->db->where('id',$id);
		$this->db->delete('landing_page_logo');
		$toast=[
			'request'=>'banner',
			'icon'=>'warning',
			'title'=>'Hapus Logo Klien Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/layanan/landing_page'));
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

	public function create_digital_marketing()
	{
		$path='./assets/images/layanan/';
		$type='jpg|png|jpeg';
		$file_name='digital_marketing';
		$judul=form('judul');
		$agency=form('agency');
		$tagline=form('tagline');

		$gambar=upload_gambar($path, $type, $file_name);
		if ($gambar==NULL) {
			$data=[
				'gambar'=>'default.png',
				'judul'=>$judul,
				'agency'=>$agency,
				'tagline'=>$tagline
			];
		} else {
			$data=[
				'gambar'=>$gambar,
				'judul'=>$judul,
				'agency'=>$agency,
				'tagline'=>$tagline
			];
		}

		$this->db->insert('layanan_digital_marketing',$data);

		$toast=[
			'request'=>'banner',
			'icon'=>'success',
			'title'=>'Tambah Logo Klien Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/layanan/digital_marketing'));
	}

	public function update_digital_marketing()
	{
		$path='./assets/images/layanan/';
		$type='jpg|png|jpeg';
		$file_name='digital_marketing';
		$id=form('id');
		$judul=form('judul');
		$agency=form('agency');
		$tagline=form('tagline');
		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('layanan_digital_marketing')->row_array();

		$gambar=upload_gambar($path, $type, $file_name);

		if ($gambar==NULL) {
			$data=[
				'judul'=>$judul,
				'agency'=>$agency,
				'tagline'=>$tagline
			];
		} else {
			$data=[
				'gambar'=>$gambar,
				'judul'=>$judul,
				'agency'=>$agency,
				'tagline'=>$tagline
			];
		}

		if ($gambar !== NULL) {
			if ($gambar_lama['gambar'] !== 'default.png') {
				unlink(FCPATH . 'assets/images/layanan/'.$gambar_lama['gambar']);
			}
		}
		$this->db->where('id',$id);
		$this->db->update('layanan_digital_marketing',$data);
		$toast=[
			'request'=>'banner',
			'icon'=>'success',
			'title'=>'Edit Banner Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/layanan/digital_marketing'));
	}

	public function delete_digital_marketing()
	{
		$id=$this->input->post('id');
		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('layanan_digital_marketing')->row_array();

		$this->db->where('id',$id);
		$this->db->delete('layanan_digital_marketing');

		if ($gambar_lama['gambar'] !== 'default.png') {
			unlink(FCPATH . 'assets/images/layanan/'.$gambar_lama['gambar']);
		}
		$toast=[
			'request'=>'portofolio',
			'icon'=>'warning',
			'title'=>'Hapus Section portofolio Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/layanan/digital_marketing'));
	}

	public function create_digital_marketing_logo()
	{
		$path='./assets/images/layanan/';
		$type='jpg|png|jpeg';
		$file_name='digital_marketing_logo-';

		$gambar=upload_gambar($path, $type, $file_name);
		$data=[
			'logo'=>$gambar
		];

		if ($gambar == NULL) {
			redirect(admin_url('website/layanan/digital_marketing'));
		} else {
			$this->db->insert('layanan_digital_marketing_logo',$data);
		}

		$toast=[
			'request'=>'banner',
			'icon'=>'success',
			'title'=>'Tambah Logo Klien Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/layanan/digital_marketing'));
	}

	public function update_digital_marketing_logo()
	{
		$path='./assets/images/layanan/';
		$type='jpg|png|jpeg';
		$file_name='digital_marketing_logo-';
		$id=form('id');
		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('layanan_digital_marketing_logo')->row_array();

		$gambar=upload_gambar($path, $type, $file_name);

		if ($gambar !== NULL) {
			if ($gambar_lama['logo'] !== 'default.png') {
				unlink(FCPATH . 'assets/images/layanan/'.$gambar_lama['logo']);
			}
			$this->db->where('id',$id);
			$this->db->update('layanan_digital_marketing_logo',['logo'=>$gambar]);
		}
		$toast=[
			'request'=>'banner',
			'icon'=>'success',
			'title'=>'Edit Banner Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/layanan/digital_marketing'));
	}

	public function delete_digital_marketing_logo()
	{
		$id=form('id');
		$this->db->where('id',$id);
		$this->db->delete('layanan_digital_marketing_logo');
		$toast=[
			'request'=>'banner',
			'icon'=>'warning',
			'title'=>'Hapus Logo Klien Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/layanan/digital_marketing_logo'));
	}

	public function create_agency()
	{
		$path='./assets/images/layanan/';
		$type='svg|jpg|png|jpeg';
		$file_name='icon-';
		$judul=form('judul');
		$isi=form('isi');

		$gambar=upload_gambar($path, $type, $file_name);

		if ($gambar==NULL) {
			$data=[
				'logo'=>'default.png',
				'judul'=>$judul,
				'isi'=>$isi
			];
		} else {
			$data=[
				'logo'=>$gambar,
				'judul'=>$judul,
				'isi'=>$isi
			];
		}

		$this->db->insert('agency',$data);

		$toast=[
			'request'=>'banner',
			'icon'=>'success',
			'title'=>'Tambah Logo Klien Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/layanan/digital_marketing'));
	}

	public function update_agency()
	{
		$path='./assets/images/layanan/';
		$type='jpg|png|jpeg|svg';
		$file_name='icon-';
		$id=form('id');
		$judul=form('judul');
		$isi=form('isi');
		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('agency')->row_array();

		$gambar=upload_gambar($path, $type, $file_name);

		if ($gambar==NULL) {
			$data=[
				'judul'=>$judul,
				'isi'=>$isi
			];
		} else {
			$data=[
				'logo'=>$gambar,
				'judul'=>$judul,
				'isi'=>$isi
			];
		}

		if ($gambar !== NULL) {
			if ($gambar_lama['gambar'] !== 'default.png') {
				unlink(FCPATH . 'assets/images/layanan/'.$gambar_lama['gambar']);
			}
		}
		$this->db->where('id',$id);
		$this->db->update('agency',$data);
		$toast=[
			'request'=>'banner',
			'icon'=>'success',
			'title'=>'Edit Banner Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/layanan/digital_marketing'));
	}

	public function delete_agency()
	{
		$id=$this->input->post('id');
		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('agency')->row_array();

		$this->db->where('id',$id);
		$this->db->delete('agency');

		if ($gambar_lama['gambar'] !== 'default.png') {
			unlink(FCPATH . 'assets/images/layanan/'.$gambar_lama['gambar']);
		}
		$toast=[
			'request'=>'portofolio',
			'icon'=>'warning',
			'title'=>'Hapus Section portofolio Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/layanan/digital_marketing'));
	}
}