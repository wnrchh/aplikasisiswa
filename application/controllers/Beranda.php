<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	/**
     * Beranda Form
     *
     * @access 	public
     * @param 	
     * @return 	view
     */
	
	public function index()
	{
		$data['title'] = 'Beranda';
		$data['subview'] = 'beranda/main';

		
		$this->load->model('berita_m');
        $data['data_berita'] = $this->berita_m->get_berita();

        $this->load->model('gallery_m');
        $data['data_gallery'] = $this->gallery_m->get_gallery();

        $this->load->model('tugas_m');
        $data['data_tugas'] = $this->tugas_m->get_tugas();

        $this->load->model('event_m');
        $data['data_event'] = $this->event_m->get_event();

        $users_id           = $this->session->userdata('active_user')->id;

        $data['kelas_siswa'] = $this->db->query("SELECT kelas from siswa where users_id ='$users_id'")->row()->kelas;

		$this->load->view('components/main', $data);
	}

}
