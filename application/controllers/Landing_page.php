<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing_page extends CI_Controller {

	public function index()
	{
		$data['title']='Layanan - Landing Page';
		$data['logo']=$this->M_Layanan->landing_page_logo();
		$data['portofolio']=$this->M_Layanan->landing_page();
		$this->load->view('website/v_landing_page',$data);
	}

	public function pricing()
	{
		$data['title']='Pricing - Landing Page';
		$this->load->view('website/v_landing_page_pricing',$data);
	}
}
