<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');		
		$this->load->model('informasi_model');
		$this->load->model('publikasi_model');
	}

	public function sejarah()
	{
		$data["sejarah"] = $this->informasi_model->sejarah();
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('sejarah', $data);
	}
	public function visi()
	{
		$data["visi"] = $this->informasi_model->visi();
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('visi', $data);
	}
	public function struktur()
	{
		$data["struktur"] = $this->informasi_model->struktur();
		$data["struktur_staklim"] = $this->informasi_model->strukturstaklim();
		$this->load->view('struktur', $data);
	}
	public function tugas()
	{
		$data["tugas"] = $this->informasi_model->tugas();
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('tugas', $data);
	}
	public function pejabat()
	{
		$data["pejabat"] = $this->informasi_model->pejabat();
		$this->load->view('pejabat', $data);
	}
	public function upt()
	{	
		$data['upt']=$this->informasi_model->get_upt();
		$this->load->view('upt',$data);
	}
	public function sdm()
	{
		$data["grafik_umur_lk"] = $this->informasi_model->grafik_umur_lk();
		$data["grafik_umur_p"] = $this->informasi_model->grafik_umur_p();
		$data["grafik_gol_lk"] = $this->informasi_model->grafik_gol_lk();
		$data["grafik_gol_p"] = $this->informasi_model->grafik_gol_p();
		$data["grafik_pen_lk"] = $this->informasi_model->grafik_pen_lk();
		$data["grafik_pen_p"] = $this->informasi_model->grafik_pen_p();
		$this->load->view('sdm', $data);
	}
	
}