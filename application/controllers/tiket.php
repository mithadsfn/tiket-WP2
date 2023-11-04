<?php
class Tiket extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }

    function index() {
        $data['tiket_online'] = $this->m_data->tampil_data()->result();
        $this->load->view('tampil_data',$data);
    }

    function tambah() {
        $this->load->view('input_data');
    }

    function tambah_aksi() {
        $nama = $this->input->post('nama');
        $pesawat = $this->input->post('pesawat');
        $kelas = $this->input->post('kelas');
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');
    
   if ($pesawat == 'Garuda' && $kelas == 'Eksekutif') {
        $harga = 1500000;
   }elseif ($pesawat == 'Garuda' && $kelas == 'Bisnis') {
        $harga = 900000;
   }elseif ($pesawat == 'Garuda' && $kelas == 'Ekonomi') {
        $harga = 500000; 
   }elseif ($pesawat == 'Merpati' && $kelas == 'Eksekutif') {
        $harga = 1200000;
   }elseif ($pesawat == 'Merpati' && $kelas == 'Bisnis') {
        $harga = 800000;
   }elseif ($pesawat == 'Merpati' && $kelas == 'Ekonomi') {
        $harga =  400000;
   }elseif ($pesawat == 'Batavia' && $kelas == 'Eksekutif') {
        $harga = 1000000;
    }elseif ($pesawat == 'Batavia' && $kelas == 'Bisnis') {
        $harga = 700000;
    }elseif ($pesawat == 'Batavia' && $kelas == 'Ekonomi') {
        $harga = 300000;
    }

   $data = array(
    'nama' => $nama,
    'pesawat' => $pesawat,
    'kelas' => $kelas,
    'harga' => $harga,
    'jumlah' => $jumlah
   );
   $this->m_data->input_data($data, 'tiket_online');
   redirect('tiket/index');
    }

   function edit($id) {
    $where = array('id' => $id);
    $data['tiket_online'] = $this->m_data->edit_data($where, 'tiket_online')->result();
    $this->load->view('edit_data', $data);
   }

   function update() {
    $id = $this->input->post('id');
    $nama = $this->input->post('nama');
    $pesawat = $this->input->post('pesawat');
    $kelas = $this->input->post('kelas');
    $harga = $this->input->post('harga');
    $jumlah = $this->input->post('jumlah');

    if ($pesawat == 'Garuda' && $kelas == 'Eksekutif') {
        $harga = 1500000;
   }elseif ($pesawat == 'Garuda' && $kelas == 'Bisnis') {
        $harga = 900000;
   }elseif ($pesawat == 'Garuda' && $kelas == 'Ekonomi') {
        $harga = 500000; 
   }elseif ($pesawat == 'Merpati' && $kelas == 'Eksekutif') {
        $harga = 1200000;
   }elseif ($pesawat == 'Merpati' && $kelas == 'Bisnis') {
        $harga = 800000;
   }elseif ($pesawat == 'Merpati' && $kelas == 'Ekonomi') {
        $harga =  400000;
   }elseif ($pesawat == 'Batavia' && $kelas == 'Eksekutif') {
        $harga = 1000000;
    }elseif ($pesawat == 'Batavia' && $kelas == 'Bisnis') {
        $harga = 700000;
    }elseif ($pesawat == 'Batavia' && $kelas == 'Ekonomi') {
        $harga = 300000;
    }

    $data = array(
        'nama' => $nama,
        'pesawat' => $pesawat,
        'kelas' => $kelas,
        'harga' => $harga,
        'jumlah' => $jumlah
    );
    
    $where = array(
        'id' => $id
    );
    $this->m_data->update_data($where, $data, 'tiket_online');
    redirect('tiket');
   }

   function hapus($id) {
    $where = array('id' => $id);
    $this->m_data->hapus_data($where, 'tiket_online');
    redirect('tiket');
   }

}
?>  