<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio extends CI_Controller {

	public function index()
	{
		$data['title']='Portofolio';
		$this->load->view('website/v_portofolio',$data);
	}
}
