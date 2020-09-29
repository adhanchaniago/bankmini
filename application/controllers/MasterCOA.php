<?php
defined('BASEPATH') or exit('No direct script access allowed');


class MasterCOA extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $this->load->model('M_Setting');
        $this->load->model('M_Akses');
        $this->load->model('M_MasterCOA');

        cek_login_user();
    }
    public function index()
    {

        $id = $this->session->userdata('tipeuser');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $data['activeMenu'] = $this->db->get_where('tb_submenu', ['submenu' => 'kas masuk'])->row()->id_menus;
		$data['akses'] = $this->M_Akses->getByLinkSubMenu(urlPath(), $id);
        $data['coa'] = $this->M_MasterCOA->getAll();

        $this->load->view('template/header');
        $this->load->view('template/sidebar', $data);
        $this->load->view('v_mastercoa/v_mastercoa', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $id = $this->session->userdata('tipeuser');
        $data['activeMenu'] = $this->db->get_where('tb_submenu', ['submenu' => 'kas masuk'])->row()->id_menus;
        $data['menu'] = $this->M_Setting->getmenu1($id);


        $this->load->view('template/header');
        $this->load->view('template/sidebar', $data);
        $this->load->view('v_mastercoa/v_mastercoa_add', $data);
        $this->load->view('template/footer');
    }

    public function tambahData()
    {

        $neraca = "0";
        $pm = "0";
        $lr = "0";
        if ($this->input->post('neraca') == 'on') {
            $neraca = 1;
        }
        if ($this->input->post('pm') == 'on') {
            $pm = 1;
        }
        if ($this->input->post('lr') == 'on') {
            $lr = 1;
        }

        $data = [
            'kode_coa' => $this->input->post('coa'),
            'akun' => $this->input->post('akun'),
            'keterangan' => $this->input->post('keterangan'),
            'neraca' => $neraca,
            'perubahan_modal' => $pm,
            'laba_rugi' => $lr,
            'id_user' => $this->session->userdata('tipeuser'),
            'tglupdate' => date('Y-m-d h:i:s')
        ];
        $this->M_MasterCOA->tambah($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success left-icon-alert" role="alert"> <strong>Sukses!</strong> Data Berhasil DiTambahkan</div>');
        redirect('mastercoa');
    }

    public function hapus($id)
    {
        $this->M_MasterCOA->hapus($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success left-icon-alert" role="alert"> <strong>Sukses!</strong> Data Berhasil DiTambahkan</div>');
        redirect('mastercoa');
    }

    public function ubah($id_coa)
    {
        $id = $this->session->userdata('tipeuser');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $data['activeMenu'] = $this->db->get_where('tb_submenu', ['submenu' => 'kas masuk'])->row()->id_menus;
        $data['coa'] = $this->M_MasterCOA->getById($id_coa);

        $this->load->view('template/header');
        $this->load->view('template/sidebar', $data);
        $this->load->view('v_mastercoa/v_mastercoa_ubah', $data);
        $this->load->view('template/footer');
    }

    public function ubahdata()
    {
        $neraca = "0";
        $pm = "0";
        $lr = "0";
        if ($this->input->post('neraca') == 'on') {
            $neraca = 1;
        }
        if ($this->input->post('pm') == 'on') {
            $pm = 1;
        }
        if ($this->input->post('lr') == 'on') {
            $lr = 1;
        }

        $data = [
            'kode_coa' => $this->input->post('coa'),
            'akun' => $this->input->post('akun'),
            'keterangan' => $this->input->post('keterangan'),
            'neraca' => $neraca,
            'perubahan_modal' => $pm,
            'laba_rugi' => $lr,
            'id_user' => $this->session->userdata('tipeuser'),
            'tglupdate' => date('Y-m-d h:i:s')
        ];
        $this->M_MasterCOA->ubah($data, $this->input->post('id_coa'));
        $this->session->set_flashdata('message', '<div class="alert alert-success left-icon-alert" role="alert"> <strong>Sukses!</strong> Data Berhasil DiTambahkan</div>');
        redirect('mastercoa');
    }
    public function detail($id_coa)
    {
        $id = $this->session->userdata('tipeuser');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $data['activeMenu'] = $this->db->get_where('tb_submenu', ['submenu' => 'kas masuk'])->row()->id_menus;
        $data['coa'] = $this->M_MasterCOA->getById($id_coa);

        $this->load->view('template/header');
        $this->load->view('template/sidebar', $data);
        $this->load->view('v_mastercoa/v_mastercoa_detail', $data);
        $this->load->view('template/footer');
    }
}
