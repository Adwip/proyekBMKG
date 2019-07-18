<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Iklim_model extends CI_Model
{

	public function Hujan_bulanancrh1($bulan)
	{
		$this->db->select('id_hujan, bulan, curah_hujan, tanggal_input, tahun');
		$this->db->order_by('id_hujan', 'ASC');
		$this->db->limit(1);
		return $this->db->get_where('hujan_bulanan', array('bulan' => $bulan))->result();
	}

	public function Hujan_bulanancrh2($bulan)
	{
		$this->db->select('id_hujan, bulan, curah_hujan, tanggal_input, tahun');
		$this->db->order_by('id_hujan', 'ASC');
		$this->db->limit(1);
		return $this->db->get_where('hujan_bulanan', array('bulan' => $bulan))->result();
	}

	public function Hujan_bulanancrh3($bulan)
	{
		$this->db->select('id_hujan, bulan, curah_hujan, tanggal_input, tahun');
		$this->db->order_by('id_hujan', 'ASC');
		$this->db->limit(1);
		return $this->db->get_where('hujan_bulanan', array('bulan' => $bulan))->result();
	}

	public function Hujan_bulanansft1($bulan)
	{
		$this->db->select('id_hujan, bulan, sifat_hujan, tanggal_input, tahun');
		$this->db->order_by('id_hujan', 'ASC');
		$this->db->limit(1);
		return $this->db->get_where('hujan_bulanan', array('bulan' => $bulan))->result();
	}

	public function Hujan_bulanansft2($bulan)
	{
		$this->db->select('id_hujan, bulan, sifat_hujan, tanggal_input, tahun');
		$this->db->order_by('id_hujan', 'ASC');
		$this->db->limit(1);
		return $this->db->get_where('hujan_bulanan', array('bulan' => $bulan))->result();
	}

	public function Hujan_bulanansft3($bulan)
	{
		$this->db->select('id_hujan, bulan, sifat_hujan, tanggal_input, tahun');
		$this->db->order_by('id_hujan', 'ASC');
		$this->db->limit(1);
		return $this->db->get_where('hujan_bulanan', array('bulan' => $bulan))->result();
	}


	public function Informasi_hujan($bulan)
	{	
		return $this->db->get_where('informasi_hujan', array('bulan' => $bulan, ))->result();
	}

	public function Informasi_hth()
	{
		$this->db->select('*');
		$this->db->from('informasi_hth');
    	$this->db->order_by('tanggal', 'DESC');
		$this->db->limit(1);
		return $query=$this->db->get()->result();  
	}

	public function ket_hth()
	{
		$this->db->select('*');
		$this->db->from('keterangan_hth');
    	$this->db->order_by('tanggal_input', 'DESC');
		$this->db->limit(1);
		return $query=$this->db->get()->result();  
	}

	public function tren_curah()
	{
		$this->db->select('*');
		$this->db->from('tren_hujan');
    	$this->db->order_by('tanggal_input', 'DESC');
		$this->db->limit(1);
		return $query=$this->db->get()->result();  
	}

	public function tren_suhu()
	{
		$this->db->select('*');
		$this->db->JOIN('foto', 'tren_suhu.id_tsh=foto.link');
        $this->db->group_by('id_tsh');
		$this->db->from('tren_suhu');
    	$this->db->order_by('tanggal_input', 'DESC');
		$this->db->limit(1);
		return $query=$this->db->get()->result();  
	}

	public function musim()
	{
		$this->db->select('*');
		$this->db->from('musim');
    	$this->db->order_by('tanggal_input', 'DESC');
		$this->db->limit(1);
		return $query=$this->db->get()->result();  
	}

	public function dinamika()
	{
		$this->db->select('*');
		$this->db->from('dinamika_atmosfer');
    	$this->db->order_by('tanggal_input', 'DESC');
		$this->db->limit(1);
		return $query=$this->db->get()->result();  
	}

}