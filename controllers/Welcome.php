<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();	
		date_default_timezone_set('Asia/Jakarta');	
		$this->load->model('gempa_model');
		$this->load->model('cuaca_model');
		$this->load->model('publikasi_model');
	}

	public function index()
	{
		$data['gempa'] = $this->gempa_model->getlastGempa();
		$data['peringatan'] = $this->cuaca_model->peringatan();
		$data['berita'] = $this->publikasi_model->berita();
		$data['beritaa'] = $this->publikasi_model->getlastBerita();
		$data['artikel'] = $this->publikasi_model->getlastArtikel();
		$data['pengumuman'] = $this->publikasi_model->getlastPengumuman();
		$data['list_cuaca']= $this->cuaca_model->get_list_cuaca(date('Y-m-d'));
		$tanggal = date('Y/m/d', time());
		$data["cuaca"] = $this->cuaca_model->hariann($tanggal);
		//echo json_encode($a);
		//echo $data['list_cuaca'];
		$this->load->view('index',$data);
	}
}
