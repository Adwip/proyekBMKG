<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iklim extends CI_Controller {

	function __construct(){
		parent::__construct();	
		date_default_timezone_set('Asia/Jakarta');	
		$this->load->model('iklim_model');
		$this->load->model('publikasi_model');
	}
	
	public function prakiraan_hujan()
	{
		$bulan = date('m');
		$bulanbsk = date('m', strtotime("+1 month"));
		$bulanls = date('m', strtotime("+2 month"));
		$monList = array(
			'01' => 'Januari',
			'02' => 'Februari',
			'03' => 'Maret',
			'04' => 'April',
			'05' => 'Mei',
			'06' => 'Juni',
			'07' => 'Juli',
			'08' => 'Agustus',
			'09' => 'September',
			'10' => 'Oktober',
			'11' => 'November',
			'12' => 'Desember',
			);
		$data["hujan_bulanancrh1"] = $this->iklim_model->hujan_bulanancrh1($monList[$bulan]);
		$data["hujan_bulanansft1"] = $this->iklim_model->hujan_bulanansft1($monList[$bulan]);
		$data["hujan_bulanancrh2"] = $this->iklim_model->hujan_bulanancrh2($monList[$bulanbsk]);
		$data["hujan_bulanansft2"] = $this->iklim_model->hujan_bulanansft2($monList[$bulanbsk]);
		$data["hujan_bulanancrh3"] = $this->iklim_model->hujan_bulanancrh3($monList[$bulanls]);
		$data["hujan_bulanansft3"] = $this->iklim_model->hujan_bulanansft3($monList[$bulanls]);
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('hujan_bulanan', $data);
	}
	public function prakiraan_musim()
	{
		$data["musim"] = $this->iklim_model->musim();
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('prakiraan_musim', $data);
	}
	public function informasi_hujan()
	{	$bulan = date('m', time());
		$monList = array(
			'01' => 'Januari',
			'02' => 'Februari',
			'03' => 'Maret',
			'04' => 'April',
			'05' => 'Mei',
			'06' => 'Juni',
			'07' => 'Juli',
			'08' => 'Agustus',
			'09' => 'September',
			'10' => 'Oktober',
			'11' => 'November',
			'12' => 'Desember',
			);
		$data["informasi"] = $this->iklim_model->informasi_hujan($monList[$bulan]);
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('informasi_hujan',$data);
	}
	public function dinamika_atmosfer()
	{
		$data["dinamika"] = $this->iklim_model->dinamika();
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('dinamika_atmosfer', $data);
	}
	public function informasi_hth()
	{
		$data["hth"] = $this->iklim_model->informasi_hth();
		$data["ket"] = $this->iklim_model->ket_hth();
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('informasi_hth',$data);
	}

	public function tren_hujan()
	{
		$data["curah"] = $this->iklim_model->tren_curah();
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('tren_hujan', $data);
	}
	public function tren_suhu()
	{
		$data["suhu"] = $this->iklim_model->tren_suhu();
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('tren_suhu', $data);
	}

}                