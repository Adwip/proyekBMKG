<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gempa extends CI_Controller {
	function __construct(){
		parent::__construct();	
		date_default_timezone_set('Asia/Jakarta');	
		$this->load->model('gempa_model');
		$this->load->model('publikasi_model');
	}


	public function gempa_terkini()
	{
		$data["gempa"] = $this->gempa_model->getAll();
		$this->load->view('gempa_terkini', $data);
	}

	public function gempa_dirasakan(){
		$data["gempa"] = $this->gempa_model->gempa_dirasakan();
		$this->load->view('gempa_dirasakan', $data);
	}

	public function antisipasi(){
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('antisipasi_gempa', $data);
	}
	public function skala(){
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('skala_mmi', $data);
	}
	public function tandaterbit()
	{
		$bulan = date('m', time());
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
		$data["tandawaktu1"] = $this->gempa_model->tandawaktuyk($monList[$bulan]);
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('tanda_waktu', $data);
	}

	public function tandaterbitslm()
	{
		$bulan = date('m', time());
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
		$data["tandawaktu2"] = $this->gempa_model->tandawaktuslm($monList[$bulan]);
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('tanda_waktu_slm', $data);
	}

	public function tandaterbitgk()
	{
		$bulan = date('m', time());
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
		$data["tandawaktu3"] = $this->gempa_model->tandawaktugk($monList[$bulan]);
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('tanda_waktu_gk', $data);
	}

	public function tandaterbitkp()
	{
		$bulan = date('m', time());
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
		$data["tandawaktu4"] = $this->gempa_model->tandawaktukp($monList[$bulan]);
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('tanda_waktu_kp', $data);
	}

	public function tandaterbitbtl()
	{
		$bulan = date('m', time());
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
		$data["tandawaktu5"] = $this->gempa_model->tandawaktubtl($monList[$bulan]);
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('tanda_waktu_btl', $data);
	}

	public function petir()
	{
		$bulan = date('m', time());
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
		$data["sam_petir"] = $this->gempa_model->sam_petir($monList[$bulan]);
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('peta_petir', $data);
	}

	public function ker_petir()
	{
		$bulan = date('m', time());
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
		$data["ker_petir"] = $this->gempa_model->ker_petir($monList[$bulan]);
		$data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('kerapatan_petir', $data);
	}

}
