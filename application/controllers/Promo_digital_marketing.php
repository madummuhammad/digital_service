<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo_digital_marketing extends CI_Controller {

	public function index()
	{
		$data['title']='Layanan - Promo Digital Marketing';
		$this->load->view('website/v_promo_digital_marketing',$data);
	}
}
