<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website_dan_toko_online extends CI_Controller {

	public function index()
	{
		$data['title']='Layanan - Website dan Toko Online';
		$data['portofolio']=$this->M_Layanan->website();
		$this->load->view('website/v_website_dan_toko_online',$data);
	}

	public function pricing()
	{
		$data['title']='Pricing - Website dan Toko Online';
		$this->load->view('website/v_website_dan_toko_online_pricing',$data);
	}
}
