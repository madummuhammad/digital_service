<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apps extends CI_Controller {

	public function index()
	{
		$data['title']='Layanan - Apps';
		$data['portofolio']=$this->M_Layanan->apps();
		$this->load->view('website/v_apps',$data);
	}

	public function pricing()
	{
		$data['title']='Pricing - Apps';
		$this->load->view('website/v_apps_pricing',$data);
	}
}
