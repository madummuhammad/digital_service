<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['klien']=$this->M_Home->klien();
		$data['title']='Home';
		$data['counter']=$this->M_Home->counter();
		$data['jml_klien']=$this->M_Home->jml_klien();
		$this->load->view('website/v_home',$data);
	}
}
