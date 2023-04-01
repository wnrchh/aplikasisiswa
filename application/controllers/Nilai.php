<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	/**
     * Nilai Form
     *
     * @access 	public
     * @param 	
     * @return 	view
     */
	
	public function index()
	{
		$data['title'] = 'Nilai';
		$data['subview'] = 'nilai/main';
		$this->load->view('components/main', $data);
	}

}
