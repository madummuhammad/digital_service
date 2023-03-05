<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio extends CI_Controller {

	public function index()
	{
		// echo '<pre>';
		// var_dump($this->M_Portofolio->pagination());
		// echo '</pre>';
		$data['title']='Portofolio';
		$data['portofolio']=$this->M_Portofolio->index();
		$data['jenis_portofolio']=$this->M_Portofolio->jenis();
		$data['pagination']=$this->M_Portofolio->pagination();
		$this->load->view('website/v_portofolio',$data);
	}
}
