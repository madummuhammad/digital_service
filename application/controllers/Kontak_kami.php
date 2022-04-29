<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_kami extends CI_Controller {

	public function index()
	{
		if ($this->input->post('_post') !== NULL) {
			$this->M_Kontak->email();
		} else {
			$data['title']='Kontak Kami';
			$this->load->view('website/v_kontak_kami',$data);
		}
	}
}
