<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in_admin();
	}

	public function index(){
		if ($this->input->post('_patch') !== NULL) {
			$this->M_Portofolio->update();
		} elseif ($this->input->post('_post') !== NULL) {
			$this->M_Portofolio->create();
		} elseif ($this->input->post('_get') !== NULL) {
			$this->M_Portofolio->delete();
		} else {
			$data['title']='Portofolio';
			$data['portofolio']=$this->M_Portofolio->index();
			$data['jenis_portofolio']=$this->M_Portofolio->jenis();
			$this->load->view('admin/website/v_portofolio',$data);
		}
	}
}