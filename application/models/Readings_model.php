<?php

class Readings_model extends CI_Model 
{
    function __construct() 
    {
        parent::__construct();
    }

    public function setReading($insert) 
    {
        $this->db->insert('Readings', $insert);

        return $this->db->insert_id();
    }

    public function getReadings()
	{
        return $this->db->get('Readings')
                        ->result_array();
	}
}