<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Portofolio extends CI_Model {

	public function index()
	{
		$this->db->join('portofolio_jenis','portofolio.id_jenis=portofolio_jenis.id_jenis');
		$page=1;
		if(isset($_GET['page'])){
			$page=$_GET['page']*8-8;
			$this->db->limit(8,$page);
		} else{
			$this->db->limit(8,$page);
		}

		if(isset($_GET['id_jenis'])){
			$id_jenis=$_GET['id_jenis'];
			$this->db->where('portofolio.id_jenis',$id_jenis);
		}
		$this->db->order_by('id','DESC');
		return $this->db->get('portofolio')->result_array();
	}

	public function pagination()
	{
		if(isset($_GET['id_jenis'])){
			$id_jenis=$_GET['id_jenis'];
			$this->db->where('portofolio.id_jenis',$id_jenis);
		}
		$count_page=$this->db->get('portofolio')->num_rows();
		$allpage=ceil($count_page/10);
		$id_jenis='';

		if(isset($_GET['id_jenis'])){
			$id_jenis='id_jenis='.$_GET['id_jenis'];
		}
		$links=[];

		for ($i=1; $i <= $allpage; $i++) {
			$links[$i-1]=[
				'links'=>base_url().'portofolio?'.$id_jenis.'&page='.$i
			];
		}

		$page=1;
		if(isset($_GET['page'])){
			$page=$_GET['page'];
		}

		if($page-1==0){
			$num_prev_page=$page;
		} else {
			if($page+1>=count($links)){
				$num_prev_page=count($links)-1;
			} else {
				$num_prev_page=$page-1;
			}

		}

		if($page+1>=count($links)){
			$num_next_page=count($links);
		} else {
			$num_next_page=$page+1;
		}

		if(isset($_GET['id_jenis'])){
			$next_page=base_url().'portofolio?id_jenis='.$_GET['id_jenis'].'&page='.$num_next_page;
			$prev_page=base_url().'portofolio?id_jenis='.$_GET['id_jenis'].'&page='.$num_prev_page;
		} else {			
			$next_page=base_url().'portofolio?&page='.$num_next_page;
			$prev_page=base_url().'portofolio?&page='.$num_prev_page;
		}

		// Current page

		$current_page=$page;

		if($page>=count($links)){
			$current_page=count($links);
		}

		if($page<=1){
			$current_page=1;
		}



		$data=[
			'links'=>$links,
			'current_page'=>$current_page,
			'next_page'=>$next_page,
			'prev_page'=>$prev_page,
			'last_page'=>count($links)
		];
		return $data;
	}

	public function jenis()
	{
		return $this->db->get('portofolio_jenis')->result_array();
	}
	
	public function create()
	{
		$path='./assets/images/portofolio/';
		$type='jpg|png|jpeg';
		$file_name='portofolio';
		$id_jenis=form('jenis');
		$link=form('link');

		$gambar=upload_gambar($path, $type, $file_name);
		if ($gambar==NULL) {
			$data=[
				'link'=>$link,
				'id_jenis'=>$id_jenis
			];
		} else {
			$data=[
				'gambar'=>$gambar,
				'link'=>$link,
				'id_jenis'=>$id_jenis
			];
		}

		if ($gambar == NULL) {
			redirect(admin_url('website/portofolio'));
		} else {
			$this->db->insert('portofolio',$data);
		}

		$toast=[
			'request'=>'banner',
			'icon'=>'success',
			'title'=>'Tambah Logo Klien Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/portofolio'));
	}

	public function update()
	{
		$path='./assets/images/portofolio/';
		$type='jpg|png|jpeg';
		$file_name='portofolio';
		$id_jenis=form('jenis');
		$id=form('id');
		$link=form('link');
		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('portofolio')->row_array();

		$gambar=upload_gambar($path, $type, $file_name);

		if ($gambar==NULL) {
			$data=[
				'link'=>$link,
				'id_jenis'=>$id_jenis,
			];
		} else {
			$data=[
				'gambar'=>$gambar,
				'id_jenis'=>$id_jenis,
				'link'=>$link
			];
		}



		if ($gambar !== NULL) {
			if ($gambar_lama['gambar'] !== 'default.png') {
				unlink(FCPATH . 'assets/images/portofolio/'.$gambar_lama['gambar']);
			}
		}
		$this->db->where('id',$id);
		$this->db->update('portofolio',$data);
		$toast=[
			'request'=>'banner',
			'icon'=>'success',
			'title'=>'Edit Banner Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/portofolio'));
	}

	public function delete()
	{
		$id=$this->input->post('id');
		$this->db->where('id',$id);
		$gambar_lama=$this->db->get('portofolio')->row_array();

		$this->db->where('id',$id);
		$this->db->delete('portofolio');

		if ($gambar_lama['gambar'] !== 'default.png') {
			unlink(FCPATH . 'assets/images/portofolio/'.$gambar_lama['gambar']);
		}
		$toast=[
			'request'=>'portofolio',
			'icon'=>'warning',
			'title'=>'Hapus Section portofolio Berhasil'
		];
		$this->session->set_flashdata($toast);
		redirect(admin_url('website/portofolio'));
	}
}