<?php

class User_m extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->library('datagrid');
	}

	/**
     * Check User Credentials
     *
     * @access 	public
     * @param 	
     * @return 	json(array)
     */
	
	public function attempt($input)
	{
		$query = $this->db->from('users u')
						->select('u.*')
						->where('email', $input['username'])
						->where('password', $input['password'])
						->where('group_id', '4')
						->get();

		return $query->row();
	}

	

}