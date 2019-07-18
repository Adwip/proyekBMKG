<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kualitas extends CI_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');		
		$this->load->model('Kah_model');
		
	}

	public function kimia()
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
		$data["kah"] = $this->Kah_model->kimia($monList[$bulan]);
		$data["ket"] = $this->Kah_model->ket_kah();
		$this->load->view('kimia', $data);
	}

	public function spm()
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
		$data["spm"] = $this->Kah_model->spm($monList[$bulan]);
		$data["ket_spm"] = $this->Kah_model->ket_spm();
		$this->load->view('spm', $data);
	}

}
