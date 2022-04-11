<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_kami extends CI_Controller {

	public function index()
	{
		$data['title']='Tentang Kami';
		$data['partner']=$this->M_About->partner();
		$data['counter']=$this->M_Home->counter();
		$this->load->view('website/v_tentang_kami',$data);
	}
}
