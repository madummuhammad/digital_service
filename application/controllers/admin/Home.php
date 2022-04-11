<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in_admin();
	}

	public function index()
	{
		if ($this->input->post('_section2satu') !== NULL) {
			$this->M_Home->section2satu();
		} elseif ($this->input->post('_section2dua') !== NULL) {
			$this->M_Home->section2dua();
		} elseif ($this->input->post('_counter') !== NULL) {
			$this->M_Home->counter_edit();
		} else {
			$data['counter']=$this->M_Home->counter();
			$data['section2']=$this->M_Home->section2();
			$data['klien']=$this->M_Home->klien();
			$data['title']='Home';
			$this->load->view('admin/website/v_home',$data);
		}
	}

	public function klien()
	{
		if ($this->input->post('_post') !== NULL) {
			$this->M_Home->kliencreate();
		} elseif ($this->input->post('_patch') !== NULL) {
			$this->M_Home->klienedit();
		} elseif ($this->input->post('_get') !== NULL) {
			$this->M_Home->kliendelete();
		} else {
			redirect(admin_url('website'));
		}
	}
}
