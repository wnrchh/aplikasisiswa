<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video_pembelajaran extends CI_Controller {

	/**
     * Video_pembelajaran Form
     *
     * @access 	public
     * @param 	
     * @return 	view
     */
	
	public function index()
	{
		$data['title'] = 'Video_pembelajaran';
		$data['subview'] = 'video_pembelajaran/main';
		$this->load->view('components/main', $data);
	}

}
