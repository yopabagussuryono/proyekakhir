<?php
class Kontak extends CI_Controller{
 
    function __construct(){
        parent::__construct();
        // konfigurasi helper & library
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->database();
    }
 
    function index(){
        // konfigurasi class pagination
        $config['base_url']=base_url()."index.php?halaman=stok-bcoklat";
            $config['total_rows']= $this->db->query("SELECT * FROM bcoklat;")->num_rows();
            $config['per_page']=12;
        $config['num_links'] = 2;
            $config['uri_segment']=3;
            $config['first_link']='< Pertama ';
        $config['last_link']='Terakhir > ';
        $config['next_link']='> ';
        $config['prev_link']='< ';
            $this->pagination->initialize($config);
 
        // konfigurasi model dan view untuk menampilkan data
        $this->load->model('m_kontak');
        $data['datakontak']=$this->m_kontak->getAll($config);
        $this->load->view('v_kontak', $data);
    }
}
?>