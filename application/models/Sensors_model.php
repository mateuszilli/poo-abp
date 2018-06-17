<?php

class Sensors_model extends CI_Model 
{
    function __construct() 
    {
        parent::__construct();
    }

    public function setSensor($insert)
	{
        $this->db->insert('Sensors', $insert);

        return $this->db->insert_id();
    }

    public function getSensors()
	{
        return $this->db->get('Sensors')
                        ->result_array();
	}
}