<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kontak_kami extends CI_Controller {

	public function index()
	{
		$data['title']='Kontak Kami';
		$this->load->view('website/v_kontak_kami',$data);
	}
}
