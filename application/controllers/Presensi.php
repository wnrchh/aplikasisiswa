<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presensi extends CI_Controller {

	/**
     * Presensi Form
     *
     * @access 	public
     * @param 	
     * @return 	view
     */
	
	public function index()
	{
		$data['title'] = 'Presensi';
		$data['subview'] = 'presensi/main';
		$this->load->view('components/main', $data);
	}

}
