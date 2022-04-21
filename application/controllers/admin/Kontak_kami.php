<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_kami extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in_admin();
	}

	public function index()
	{
		$data['title']='Kontak Kami';
		$this->load->view('admin/website/v_kontak_kami',$data);
	}
}