<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Gempa_model extends CI_Model
{
    function __construct(){
            parent::__construct();
            //load our second db and put in $db2
            $this->db2 = $this->load->database('second', TRUE);
        }
	 public function getAll()
    {
        return $this->db2->get('gempa')->result();
    }

    public function gempa_dirasakan()
    {
    	return $this->db2->get('gempa')->result();
    }
    
    public function getlastGempa()
    {
    $this->db2->select('*');
	$this->db2->from('gempa');
    $this->db2->order_by('waktu_terjadi', 'DESC');
	$this->db2->limit(1);
	return $query=$this->db2->get()->result();  
	}
    public function tandawaktuyk($bulan)
    {
        return $this->db2->get_where('ttm', array('wilayah' => 'Yogyakarta', 'bulan' => $bulan))->result();
    }
    public function tandawaktuslm($bulan)
    {
        return $this->db2->get_where('ttm', array('wilayah' => 'Sleman', 'bulan' => $bulan))->result();
    }
    public function tandawaktugk($bulan)
    {
        return $this->db2->get_where('ttm', array('wilayah' => 'Gunungkidul', 'bulan' => $bulan))->result();
    }
    public function tandawaktubtl($bulan)
    {
        return $this->db2->get_where('ttm', array('wilayah' => 'Bantul', 'bulan' => $bulan))->result();
    }
    public function tandawaktukp($bulan)
    {
        return $this->db2->get_where('ttm', array('wilayah' => 'Kulonprogo', 'bulan' => $bulan))->result();
    }
    public function sam_petir($bulan)
    {
        return $this->db2->get_where('sambaran_petir', array('bulan' => $bulan))->result();
    }
    public function ker_petir($bulan)
    {
        return $this->db2->get_where('kerapatan_petir', array('bulan' => $bulan))->result();
    }
}