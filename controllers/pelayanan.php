<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelayanan extends CI_Controller {

	function __construct(){
		parent::__construct();	
		date_default_timezone_set('Asia/Jakarta');	
        $this->load->model('pelayanan_model');
        $this->load->model('publikasi_model');
    }

    public function form_pelayanan()
	{
        $data["form"] = $this->pelayanan_model->form_pelayanan();
        $data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('form_pelayanan', $data);
    }
    public function tarif_pelayanan()
	{
        $data["tarif"] = $this->pelayanan_model->tarif_pelayanan();
        $data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('tarif_pelayanan', $data);
    }
    public function syarat_permohonan()
	{
        $data["syarat"] = $this->pelayanan_model->syarat_permohonan();
        $data["pengumuman"] = $this->publikasi_model->getListPengumuman();
		$data["artikel"] = $this->publikasi_model->getListArtikel();
		$data["berita"] = $this->publikasi_model->getListBerita();
		$this->load->view('syarat_permohonan', $data);
    }
    public function alur_permohonan()
	{
		$data["alur"] = $this->pelayanan_model->alur_permohonan();
		$this->load->view('alur_permohonan', $data);
	}
}