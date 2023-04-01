<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	/**
     * Jadwal Form
     *
     * @access 	public
     * @param 	
     * @return 	view
     */
	
	public function index()
	{
		$data['title'] = 'Jadwal';
		$data['subview'] = 'jadwal/main';
		$this->load->view('components/main', $data);
	}

}
