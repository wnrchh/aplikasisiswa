<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	/**
     * Settings Form
     *
     * @access 	public
     * @param 	
     * @return 	view
     */
	
	public function index()
	{
		$data['title'] = 'Settings';
		$data['subview'] = 'settings/main';
		$this->load->view('components/main', $data);
	}

}
