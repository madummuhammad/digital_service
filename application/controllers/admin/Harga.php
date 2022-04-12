<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Harga extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in_admin();
	}

	public function index($id_paket='', $id_produk='')
	{
		if ($this->input->post('_patch') !== NULL) {
			$this->M_Harga->update();
		} else {
			$data['produk']=$this->M_Harga->produk($id_paket);
			$data['produk_detil']=$this->M_Harga->produk_detil($id_paket,$id_produk);
			$data['paket']=$this->M_Harga->paket();
			$data['harga_fitur']=$this->M_Harga->harga_fitur($id_paket);
			$this->load->view('admin/partial/v_header');
			$this->load->view('admin/partial/v_topbar');
			$this->load->view('admin/partial/v_sidebar',$data);
			$this->load->view('admin/v_harga',$data);
		}
	}

	public function sub_fitur($id_paket='', $id_produk='')
	{
		if ($this->input->post('_patch') !== NULL) {
			$this->M_Harga->update();
		} elseif ($this->input->post('_post') !== NULL) {
			$this->M_Harga->sub_fitur_create();
		} elseif ($this->input->post('_get') !== NULL) {
			$this->M_Harga->delete();
		} else {
			redirect(admin_url('harga/'.$id_paket.'/'.$id_produk));
		}
	}

	public function isi_fitur($id_paket='', $id_produk='')
	{
		if ($this->input->post('_patch') !== NULL) {
			$this->M_Harga->update();
		} elseif ($this->input->post('_post') !== NULL) {
			$this->M_Harga->isi_fitur_create();
		} elseif ($this->input->post('_get') !== NULL) {
			$this->M_Harga->isi_fitur_delete();
		} else {
			redirect(admin_url('harga/'.$id_paket.'/'.$id_produk));
		}
	}
}