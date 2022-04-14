<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in_admin();
	}

	public function website(){
		if ($this->input->post('_patch') !== NULL) {
			$this->M_Layanan->update_website();
		} elseif ($this->input->post('_post') !== NULL) {
			$this->M_Layanan->create_website();
		} elseif ($this->input->post('_get') !== NULL) {
			$this->M_Layanan->delete_website();
		} else {
			$data['title']='Layanan - Website dan Toko Online';
			$data['portofolio']=$this->M_Layanan->website();
			$this->load->view('admin/website/v_website_dan_toko_online',$data);
		}
	}

	public function apps(){
		if ($this->input->post('_patch') !== NULL) {
			$this->M_Layanan->update_apps();
		} elseif ($this->input->post('_post') !== NULL) {
			$this->M_Layanan->create_apps();
		} elseif ($this->input->post('_get') !== NULL) {
			$this->M_Layanan->delete_apps();
		} else {
			$data['title']='Layanan - Apps';
			$data['portofolio']=$this->M_Layanan->apps();
			$this->load->view('admin/website/v_apps.php',$data);
		}
	}
	public function landing_page(){
		if ($this->input->post('_patch') !== NULL) {
			$this->M_Layanan->update_landing_page();
		} elseif ($this->input->post('_post') !== NULL) {
			$this->M_Layanan->create_landing_page();
		} elseif ($this->input->post('_get') !== NULL) {
			$this->M_Layanan->delete_landing_page();
		} else {
			$data['title']='Layanan - Landing_page';
			$data['portofolio']=$this->M_Layanan->landing_page();
			$this->load->view('admin/website/v_landing_page.php',$data);
		}
	}
}