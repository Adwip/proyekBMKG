<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_model extends CI_Model
{
    function __construct(){
            parent::__construct();
            $this->db3 = $this->load->database('third', TRUE);
        }

    public function pejabat()
    {
        return $this->db3->get('pegawai')->result();
    }
    public function sejarah()
    {
        return $this->db3->get_where('umum', array('jenis' => 'Sejarah'))->result();
    }
    public function visi()
    {
        return $this->db3->get_where('umum', array('jenis' => 'Visi'))->result();
    }
    public function struktur()
    {
        return $this->db3->get_where('umum', array('jenis' => 'STASIUN GEOFISIKA YOGYAKARTA'))->result();
    }
    public function strukturstaklim()
    {
        return $this->db3->get_where('umum', array('jenis' => 'STASIUN KLIMATOLOGI YOGYAKARTA'))->result();
    }
    public function tugas()
    {
        return $this->db3->get_where('umum', array('jenis' => 'Tugas'))->result();
    }
    public function grafik_umur_lk()
    {
        return $this->db3->get_where('grafik_umur', array('jenis_kelamin' => 'l'))->result();
    }
    public function grafik_umur_p()
    {
        return $this->db3->get_where('grafik_umur', array('jenis_kelamin' => 'p'))->result();       
    }
    public function grafik_gol_lk()
    {
        return $this->db3->get_where('grafik_golongan', array('jenis_kelamin' => 'l'))->result();
    }
    public function grafik_gol_p()
    {
        return $this->db3->get_where('grafik_golongan', array('jenis_kelamin' => 'p'))->result();       
    }
    public function grafik_pen_lk()
    {
        return $this->db3->get_where('grafik_pendidikan', array('jenis_kelamin' => 'l'))->result();
    }
    public function grafik_pen_p()
    {
        return $this->db3->get_where('grafik_pendidikan', array('jenis_kelamin' => 'p'))->result();       
    }

    public function get_upt(){
        $data=$this->db3->get('upt');
        return $data->result();
    }



}