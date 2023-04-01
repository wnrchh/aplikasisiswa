<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akademik extends CI_Controller {

	/**
     * Akademik Form
     *
     * @access 	public
     * @param 	
     * @return 	view
     */
	
	public function index()
	{
		$data['title'] = 'Akademik';
		$data['subview'] = 'akademik/main';
		$this->load->view('components/main', $data);
	}

}
