<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Harga extends CI_Model {

	public function paket()
	{
		return $this->db->get('paket')->result_array();
	}

	public function produk($id_paket="")
	{
		$this->db->where('id_paket',$id_paket);
		return $this->db->get('produk')->result_array();
	}

	public function harga_fitur($id_produk="")
	{
		$this->db->where('id_produk',$id_produk);
		return $this->db->get('harga_fitur')->result_array();
	}

	public function produk_detil($id_paket="", $id_produk="")
	{
		$this->db->where('id_produk',$id_produk);
		$this->db->where('id_paket',$id_paket);
		return $this->db->get('produk')->result_array();
	}

	public function sub_fitur($id_harga_fitur)
	{	
		$this->db->where('id_harga_fitur',$id_harga_fitur);
		return $this->db->get('sub_fitur')->result_array();
	}

	public function isi_fitur($id_sub_fitur)
	{
		$this->db->where('id_sub_fitur',$id_sub_fitur);
		return $this->db->get('isi_fitur')->result_array();
	}

	public function sub_fitur_create()
	{
		$id_harga_fitur=form('id_harga_fitur');
		$id_produk=$this->uri->segment(5);
		$sub_fitur=form('sub_fitur');
		$id_paket=$this->uri->segment(4);

		$data=[
			'nama'=>$sub_fitur,
			'id_harga_fitur'=>$id_harga_fitur
		];

		$this->db->insert('sub_fitur',$data);

		redirect(admin_url('harga/'.$id_paket.'/'.$id_produk));
	}

	public function sub_fitur_update()
	{
		$sub_fitur=form('sub_fitur');
		$id_sub_fitur=form('id_sub_fitur');
		$id_produk=$this->uri->segment(5);
		$id_paket=$this->uri->segment(4);

		$data=[
			'nama'=>$sub_fitur
		];

		$this->db->where('id_sub_fitur',$id_sub_fitur);
		$this->db->update('sub_fitur',$data);

		redirect(admin_url('harga/'.$id_paket.'/'.$id_produk));
	}

	public function isi_fitur_coret()
	{
		$id_isi_fitur=form('id');
		$coret=form('coret');
		if ($coret==0) {
			$coret=1;
		} else {
			$coret=0;
		}

		$id_produk=$this->uri->segment(5);
		$id_paket=$this->uri->segment(4);

		$data=[
			'coret'=>$coret
		];

		$this->db->where('id_isi_fitur',$id_isi_fitur);
		$this->db->update('isi_fitur',$data);
	}

	public function sub_fitur_delete()
	{
		$id_sub_fitur=form('id');
		$id_produk=$this->uri->segment(5);
		$id_paket=$this->uri->segment(4);


		$this->db->where('id_sub_fitur',$id_sub_fitur);
		$this->db->delete('sub_fitur');

		redirect(admin_url('harga/'.$id_paket.'/'.$id_produk));
	}

	public function isi_fitur_create()
	{
		$id_sub_fitur=form('id_sub_fitur');
		$isi=form('isi');
		$id_paket=$this->uri->segment(4);
		$id_produk=$this->uri->segment(5);
		$coret=form('coret');
		if ($coret ==NULL) {
			$coret=0;
		};
		$data=[
			'isi'=>$isi,
			'id_sub_fitur'=>$id_sub_fitur,
			'coret'=>$coret
		];

		$this->db->insert('isi_fitur',$data);

		redirect(admin_url('harga/'.$id_paket.'/'.$id_produk));
	}

	public function isi_fitur_update()
	{
		$id_isi_fitur=form('id');
		$isi=form('isi');
		$id_paket=$this->uri->segment(4);
		$id_produk=$this->uri->segment(5);
		$data=[
			'isi'=>$isi,
		];

		$this->db->where('id_isi_fitur',$id_isi_fitur);
		$this->db->update('isi_fitur',$data);

		redirect(admin_url('harga/'.$id_paket.'/'.$id_produk));
	}

	public function isi_fitur_delete()
	{
		$id_paket=$this->uri->segment(4);
		$id_produk=$this->uri->segment(5);
		$id_isi_fitur=form('id');

		$this->db->where('id_isi_fitur',$id_isi_fitur);
		$this->db->delete('isi_fitur');

		redirect(admin_url('harga/'.$id_paket.'/'.$id_produk));
	}

	public function update()
	{
		$title=form('title');
		$tagline=form('tagline');
		$harga=form('harga');
		$id_harga_fitur=form('id_harga_fitur');

		

		$jml=count($id_harga_fitur);

		for ($i=0; $i < $jml; $i++) {
			$data=[
				'nama'=>$title[$i],
				'tagline'=>$tagline[$i],
				'harga'=>$harga[$i]
			];
			$this->db->where('id_harga_fitur',$id_harga_fitur[$i]);
			$this->db->update('harga_fitur',$data);
		}

		redirect(admin_url('harga/'.$this->uri->segment(3).'/'.$this->uri->segment(4)));
	}

}