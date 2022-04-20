<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio extends CI_Controller {

	public function index()
	{
		$data['title']='Portofolio';
		$data['portofolio']=$this->M_Portofolio->index();
		$data['jenis_portofolio']=$this->M_Portofolio->jenis();
		$this->load->view('website/v_portofolio',$data);
	}
}
