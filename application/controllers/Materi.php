<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {

	/**
     * Materi Form
     *
     * @access 	public
     * @param 	
     * @return 	view
     */
	
	public function index()
	{
		$data['title'] = 'Materi';
		$data['subview'] = 'materi/main';
		$this->load->view('components/main', $data);
	}

}
