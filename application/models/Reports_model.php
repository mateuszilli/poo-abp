<?php

class Reports_model extends CI_Model 
{
    function __construct() 
    {
        parent::__construct();
    }

    public function getReports()
	{
        return $this->db->get("View_reports")
                        ->result_array();
    }
}