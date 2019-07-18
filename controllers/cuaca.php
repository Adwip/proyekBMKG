<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuaca extends CI_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');		
		$this->load->model('cuaca_model');
		$this->load->model('publikasi_model');
	}

	public function prakiraan_cuaca()
	{
		// $data["cuaca"] = $this->cuaca_model->dinihari();
		// $data["cuaca1"] = $this->cuaca_model->malam();
		$tanggal = date('Y/m/d', time());
		$data['cuaca']=$this->cuaca_model->getCuaca($tanggal);
		$this->load->view('prakiraan_diy', $data);
	}

	public function prakiraan_cuaca_bsk()
	{
		// $data["cuaca"] = $this->cuaca_model->dinihari();
		// $data["cuaca1"] = $this->cuaca_model->malam();
		$tanggal = date('Y/m/d', strtotime("+1 day",time()));
		$data['cuaca']=$this->cuaca_model->getCuaca($tanggal);
		$this->load->view('prakiraan_diy_bsk', $data);
	}

	public function prakiraan_cuaca_ls()
	{
		// $data["cuaca"] = $this->cuaca_model->dinihari();
		// $data["cuaca1"] = $this->cuaca_model->malam();
		$tanggal = date('Y/m/d', strtotime("+2 day",time()));
		$data['cuaca']=$this->cuaca_model->getCuaca($tanggal);
		$this->load->view('prakiraan_diy_ls', $data);
	}

	public function citra_radar(){
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('citra_radar', $data);
	}

	public function prospek(){
		$data["prospek"] = $this->cuaca_model->prospek();
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('prospek', $data);
	}
}
