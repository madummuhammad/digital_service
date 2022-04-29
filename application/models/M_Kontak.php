<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kontak extends CI_Model {

	public function email()
	{
		$email=form('email');
		$nama=form('nama');
		$layanan=form('layanan');
		$pesan=form('pesan');

		$htmlContent = '<p>Hi Ansol, saya '.$nama.'</p>';
		$htmlContent .= '<p>Dengan email : '.$email.'</p>';
		$htmlContent .= '<p>Layanan : '.$layanan.'</p>';
		$htmlContent .= '<p>Pean saya : '.$pesan.'</p><br>';
		$htmlContent .= '<p>Terimakasih</p>';


		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		$this->email->to('project@ansol.id');
		$this->email->from('client@ansol.id','client');
		$this->email->subject('Pesan Dari '.$nama);
		$this->email->message($htmlContent);
		$this->email->send();
	}
}