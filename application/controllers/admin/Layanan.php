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
			$data['logo']=$this->M_Layanan->landing_page_logo();
			$data['title']='Layanan - Landing_page';
			$data['portofolio']=$this->M_Layanan->landing_page();
			$this->load->view('admin/website/v_landing_page.php',$data);
		}
	}

	public function landing_page_logo(){
		if ($this->input->post('_patch') !== NULL) {
			$this->M_Layanan->update_landing_page_logo();
		} elseif ($this->input->post('_post') !== NULL) {
			$this->M_Layanan->create_landing_page_logo();
		} elseif ($this->input->post('_get') !== NULL) {
			$this->M_Layanan->delete_landing_page_logo();
		} else {
			$data['logo']=$this->M_Layanan->landing_page_logo();
			$data['title']='Layanan - Landing_page';
			$data['portofolio']=$this->M_Layanan->landing_page();
			$this->load->view('admin/website/v_landing_page.php',$data);
		}
	}

	public function digital_marketing(){
		if ($this->input->post('_patch') !== NULL) {
			$this->M_Layanan->update_digital_marketing();
		} elseif ($this->input->post('_post') !== NULL) {
			$this->M_Layanan->create_digital_marketing();
		} elseif ($this->input->post('_get') !== NULL) {
			$this->M_Layanan->delete_digital_marketing();
		} else {
			$data['agency']=$this->M_Layanan->agency();
			$data['logo']=$this->M_Layanan->digital_marketing_logo();
			$data['title']='Layanan - Promo Digital Marketing';
			$data['portofolio']=$this->M_Layanan->digital_marketing();
			$this->load->view('admin/website/v_digital_marketing.php',$data);
		}
	}

	public function digital_marketing_logo(){
		if ($this->input->post('_patch') !== NULL) {
			$this->M_Layanan->update_digital_marketing_logo();
		} elseif ($this->input->post('_post') !== NULL) {
			$this->M_Layanan->create_digital_marketing_logo();
		} elseif ($this->input->post('_get') !== NULL) {
			$this->M_Layanan->delete_digital_marketing_logo();
		} else {
			$data['agency']=$this->M_Layanan->agency();
			$data['logo']=$this->M_Layanan->digital_marketing_logo();
			$data['title']='Layanan - Promo Digital Marketing';
			$data['portofolio']=$this->M_Layanan->digital_marketing();
			$this->load->view('admin/website/v_digital_marketing.php',$data);
		}
	}

	public function agency(){
		if ($this->input->post('_patch') !== NULL) {
			$this->M_Layanan->update_agency();
		} elseif ($this->input->post('_post') !== NULL) {
			$this->M_Layanan->create_agency();
		} elseif ($this->input->post('_get') !== NULL) {
			$this->M_Layanan->delete_agency();
		} else {
			$data['agency']=$this->M_Layanan->agency();
			$data['logo']=$this->M_Layanan->digital_marketing_logo();
			$data['title']='Layanan - Promo Digital Marketing';
			$data['portofolio']=$this->M_Layanan->digital_marketing();
			$this->load->view('admin/website/v_digital_marketing.php',$data);
		}
	}
}