<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {

	/**
     * Tugas Form
     *
     * @access 	public
     * @param 	
     * @return 	view
     */
	
	public function index()
	{
		$data['title'] = 'Tugas';
		$data['subview'] = 'tugas/main';
		$this->load->view('components/main', $data);
	}

}
