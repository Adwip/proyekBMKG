<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Publikasi_model extends CI_Model
{
	function __construct(){
            parent::__construct();
            $this->db3 = $this->load->database('third', TRUE);
        }

    public function berita()
    {   
        $this->db3->SELECT('*');
        $this->db3->JOIN('foto', 'berita.id_berita=foto.tautan');
        $this->db3->group_by('id_berita');
        $this->db3->order_by('tanggal_input', 'DESC');
	    $this->db3->limit(3);
    	return $this->db3->get('berita')->result();
    }    

    public function getDetail($id){
        $this->db3->SELECT('*');
        $this->db3->JOIN('foto', 'berita.id_berita=foto.tautan');
        $this->db3->group_by('id_berita');
        return $this->db3->get_where('berita', array('id_berita' => $id))
        ->result();
    }

    public function getListBerita()
    {
    	$this->db3->SELECT('*');
        $this->db3->JOIN('foto', 'berita.id_berita=foto.tautan');
        $this->db3->group_by('id_berita');
        $this->db3->order_by('tanggal_input', 'DESC');
	    $this->db3->limit(3);
	    return $query=$this->db3->get('berita')->result();  
    }

    public function getlastBerita()
    {
    $this->db3->SELECT('*');
    $this->db3->JOIN('foto', 'berita.id_berita=foto.tautan');
    $this->db3->group_by('id_berita');
    $this->db3->order_by('tanggal_input', 'DESC');
	$this->db3->limit(1);
	return $query=$this->db3->get('berita')->result();  
    }
    
    public function artikel()
    {
        $this->db3->SELECT('*');
        $this->db3->order_by('tanggal_input', 'DESC');
	    $this->db3->limit(10);
    	return $this->db3->get('artikel')->result();
    }

    public function getListArtikel()
    {
    	$this->db3->select('*');
	    $this->db3->from('artikel');
        $this->db3->order_by('tanggal_input', 'DESC');
	    $this->db3->limit(3);
	    return $query=$this->db3->get()->result();  
    }
    
    public function getDetailArtikel($id){
        return $this->db3->get_where('artikel', array('id_art' => $id))
        ->result();
    }

    public function getlastArtikel()
    {
    $this->db3->select('*');
	$this->db3->from('artikel');
    $this->db3->order_by('tanggal_input', 'DESC');
	$this->db3->limit(1);
	return $query=$this->db3->get()->result();  
    }

    public function pengumuman()
    {
        $this->db3->order_by('tanggal_input', 'DESC');
	    $this->db3->limit(10);
    	return $this->db3->get('pengumuman')->result();
    }

    public function getListPengumuman()
    {
    	$this->db3->select('judul, isi, id_peng as id_pengumuman, tanggal_input');
	    $this->db3->from('pengumuman');
        $this->db3->order_by('tanggal_input', 'DESC');
	    $this->db3->limit(3);
	    return $query=$this->db3->get()->result();  
    }

    public function getDetailPengumuman($id){
        return $this->db3->get_where('pengumuman', array('id_pengumuman' => $id))
        ->result();
    }

    public function getlastPengumuman()
    {
    $this->db3->select('*');
	$this->db3->from('pengumuman');
    $this->db3->order_by('tanggal_input', 'DESC');
	$this->db3->limit(1);
	return $query=$this->db3->get()->result();  
    }

    public function jdih()
    {
        return $this->db3->get('jdih')->result();
    }


}