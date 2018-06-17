<?php

class Cars_model extends CI_Model 
{
    function __construct() 
    {
        parent::__construct();
    }

    public function setCar($insert)
	{
        $this->db->insert('Cars', $insert);
    }

    public function getCar($id)
    {
        return $this->db->where('id_car', $id)
                        ->get('Cars')
                        ->row_array();
    }

	public function getCars()
	{
        return $this->db->get('Cars')
                        ->result_array();
	}
}