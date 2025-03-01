<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends MY_Controller
{

    private $title = "Event";
    private $url = "kegiatan";

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("portal/login"));
        }
    }

    public function index()
    {
        $data['title'] = "Plurilateral Events";
        $data['private_url'] = "kegiatan";
        $data['show'] = $this->db->query("SELECT * FROM kegiatan")->result();
        $this->load->view('content/event/kegiatan', $data);
    }

    function edit_kegiatan(){
        $id = $this->input->post("kegiatan_id");
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi_kegiatan');
        $tanggal_mulai = $this->input->post('tanggal_mulai');
        $tanggal_selesai = $this->input->post('tanggal_selesai');
        $tipe = $this->input->post('tipe');

        $object = array(
            'nama' => $nama,
            'deskripsi_kegiatan' => $deskripsi,
            'tanggal_mulai' => $tanggal_mulai,
            'tanggal_selesai' => $tanggal_selesai,
            'tipe' => $tipe,
        );
   //     $this->kegiatan = $this->_uploadImage3();
        $test = $this->db->update('kegiatan', $object, array('kegiatan_id' => $id));

        redirect('portal/event', 'refresh');
    }




    public function message()
    {
        $data['title'] = "Plurilateral Message";
        $data['private_url'] = "message";
        // $data['show'] = $this->db->query("SELECT * FROM kegiatan")->result();
        $this->load->view('content/kegiatan/message', $data);
    }

    public function tambah_kegiatan()
    {
        $data['title'] = "Tambah Plurilateral kegiatan";
        $data['private_url'] = "tambah_kegiatan";
        $data['kegiatan'] = $this->db->query("SELECT * FROM kegiatan")->result();
        $this->load->view('content/event/tambah_kegiatan', $data);
    }



    public function imageUpload()
    {
        $data['title'] = "Add Plurilateral National Initiative Article";
        $data['private_url'] = "imageUpload";
        // $data['kegiatan'] = $this->db->query("SELECT * FROM kegiatan")->result();
        $this->load->view('content/kegiatan/imageUpload', $data);
    }


    function insert_kegiatan()
    {
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi_kegiatan');
        $tanggal_mulai = $this->input->post('tanggal_mulai');
        $tanggal_selesai = $this->input->post('tanggal_selesai');
        $tipe = $this->input->post('tipe');

        $object = array(
            'nama' => $nama,
            'deskripsi_kegiatan' => $deskripsi,
            'tanggal_mulai' => $tanggal_mulai,
            'tanggal_selesai' => $tanggal_selesai,
            'tipe' => $tipe,
        );
        //     $this->kegiatan = $this->_uploadImage3();
        $test = $this->db->insert('kegiatan', $object);


        redirect('portal/event', 'refresh');
    }


    private function _uploadImage3()
    {
        $config['upload_path']          = './assets/files/';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['file_name']            = time();
        $config['overwrite']            = true;
        $config['max_size']             = 25600; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('kegiatan')) {
            return $this->upload->data('file_name');
        } else {
            return 'default.jpg';
        }
    }

    function hapus_kegiatan($id)
    {
        $delete = $this->db->delete('kegiatan', array('kegiatan_id' => $id));
        redirect('portal/event', 'refresh');
    }

    function update_kegiatan($id)
    {
        $data['title'] = "Edit Plurilateral kegiatan";
        $data['editdata']  = $this->db->get_where('kegiatan', array('kegiatan_id' => $id))->result_object();
        $data['kegiatan'] = $this->db->query("SELECT * FROM kegiatan")->result();
        $this->load->view('content/event/edit_kegiatan', $data);
    }

}
