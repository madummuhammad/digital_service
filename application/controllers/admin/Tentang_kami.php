<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_kami extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in_admin();
	}

	public function index()
	{
		$data['counter']=$this->M_Home->counter();
		$data['partner']=$this->M_About->partner();
		$data['title']='Tentang Kami';
		$this->load->view('admin/website/v_tentang_kami',$data);
	}

	public function partner()
	{
		if ($this->input->post('_post') !== NULL) {
			$this->M_About->partnercreate();
		} elseif ($this->input->post('_patch') !== NULL) {
			$this->M_About->partneredit();
		} elseif ($this->input->post('_get') !== NULL) {
			$this->M_About->partnerdelete();
		} else {
			redirect(admin_url('website/tentang_kami'));
		}
	}
}
