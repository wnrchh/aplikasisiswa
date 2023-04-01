<?php

class Tugas_m extends CI_Model {   

    function __construct()
    {
        parent::__construct();
        $this->load->library('datagrid');
    }

    /**
     * Datagrid Data
     *
     * @access  public
     * @param   
     * @return  json(array)
     */

        public function get_tugas()
    {
        $query = $this->db->from('tugas g')
                        ->select('g.*')
                        
                        ->order_by('id','DESC')
                        ->limit('3')
                        ->get();

        return $query->result();
    }
       
   
    public function getJson($input)
    {
        $table  = 'tugas as a';
        $select = 'a.*';

        $replace_field  = [
            ['old_name' => 'kelas', 'new_name' => 'a.kelas']
        ];

        $param = [
            'input'     => $input,
            'select'    => $select,
            'table'     => $table,
            'replace_field' => $replace_field
        ];

        $data = $this->datagrid->query($param, function($data) use ($input) {
            return $data;
        });

        return $data;
    }

}