<?php

class Values_model extends CI_Model 
{
    function __construct() 
    {
        parent::__construct();
    }

    public function setValue($insert) 
    {
        $this->db->insert('Values', $insert);
    }

    public function getValues()
    {
        return $this->db->get('Values')
                        ->result_array();
    }
}