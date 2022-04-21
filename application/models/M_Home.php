<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model {

	public function index()
	{

	}

	public function section2()
	{
		$data=$this->db->get('home_section2')->row_array();
		return $data;
	}

	public function section2satu()
	{
		$value=form('value');

		$data=[
			'satu'=>$value
		];

		$this->db->where('id',1);
		$this->db->update('home_section2',$data);

		redirect(admin_url('website'));
	}

	public function section2dua()
	{
		$value=form('value');

		$data=[
			'dua'=>$value
		];

		$this->db->where('id',1);
		$this->db->update('home_section2',$data);

		redirect(admin_url('website'));
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
		$data=$this->db->get('home_klien')->result_array();
		return $data;
	}

	public function jml_klien()
	{
		$data=$this->db->get('home_klien')->result_array();
		$jml=count($data);

		$hasil=$jml/8;
		return ceil($hasil);
	}

	public function kliencreate()
	{
		$path='./assets/images/logo/';
		$type='jpg|png|jpeg';
		$file_name='logo';

		$gambar=upload_gambar($path, $type, $file_name);
		$data=[
			'logo'=>$gambar
		];

		if ($gambar == NULL) {
			redirect(admin_url('website'));
		} else {
			$this->db->insert('home_klien',$data);
		}

		$toast=[
			'request'=>'banner',
			'icon'=>'success',
			'title'=>'Tambah Logo Klien Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website'));
	}

	public function klienedit()
	{
		$path='./assets/images/logo/';
		$type='jpg|png|jpeg';
		$file_name='logo';
		$id=form('id');
		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('home_klien')->row_array();

		$gambar=upload_gambar($path, $type, $file_name);

		if ($gambar !== NULL) {
			if ($gambar_lama['logo'] !== 'default.png') {
				unlink(FCPATH . 'assets/images/logo/'.$gambar_lama['logo']);
			}
			$this->db->where('id',$id);
			$this->db->update('home_klien',['logo'=>$gambar]);
		}
		$toast=[
			'request'=>'banner',
			'icon'=>'success',
			'title'=>'Edit Banner Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website'));
	}

	public function kliendelete()
	{
		$id=form('id');
		$this->db->where('id',$id);
		$this->db->delete('home_klien');
		$toast=[
			'request'=>'banner',
			'icon'=>'warning',
			'title'=>'Hapus Logo Klien Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website'));
	}

	public function email()
	{
		$email=form('email');
		
		$htmlContent = '<h3>Hi, '.$email.'</h3>';
		$htmlContent .= '<p>Terimakasih, kami akan segera kirimkan template
		Landing Page dan Voucher via Email</p><br>';
		$htmlContent .= '<p>Terimakasih</p>';


		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		$this->email->to($email);
		$this->email->from('reply@ansol.com','Ansol');
		$this->email->subject('Download Landing Page & Voucher Diskon');
		$this->email->message($htmlContent);
		$this->email->send();
	}

}
