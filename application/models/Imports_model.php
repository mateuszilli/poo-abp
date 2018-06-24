<?php

class Imports_model extends CI_Model 
{
    function __construct() 
    {
        parent::__construct();
    }

    public function setImport($insert) 
    {
        $this->db->insert('Imports', $insert);

        return $this->db->insert_id();
    }
}