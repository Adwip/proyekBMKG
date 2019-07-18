<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publikasi extends CI_Controller {
	function __construct(){
		parent::__construct();	
		date_default_timezone_set('Asia/Jakarta');
		$this->load->helper('text');	
		$this->load->model('publikasi_model');
	}

	public function berita(){
		$data["berita"] = $this->publikasi_model->berita();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$this->load->view('berita', $data);
	}

	public function detailberita($id = null){
		$id = $_GET['id'];
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data['detail'] = $this->publikasi_model->getDetail($id);
		$this->load->view('detail_berita', $data);
	}

	public function artikel(){
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->artikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('artikel', $data);
		
	}

	public function detailartikel($id = null){
		$id = $_GET['id'];
		$data['detailartikel'] = $this->publikasi_model->getDetailArtikel($id);
		$this->load->view('detail_artikel', $data);
	}

	public function pengumuman(){
		$data["pengumuman"] = $this->publikasi_model->pengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('pengumuman', $data);
	}

	public function detailpengumuman($id = null){
		$id = $_GET['id'];
		$data['detailpengumuman'] = $this->publikasi_model->getDetailPengumuman($id);
		$this->load->view('detail_pengumuman', $data);
	}

	public function jdih()
	{
		$data['jdih'] = $this->publikasi_model->jdih();
		$this->load->view('jdih', $data);
	}

}