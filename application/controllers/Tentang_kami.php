<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_kami extends CI_Controller {

	public function index()
	{
		$data['title']='Tentang Kami';
		$this->load->view('website/v_tentang_kami',$data);
	}
}
