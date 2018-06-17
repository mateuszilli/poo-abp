<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Readings extends CI_Controller 
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('Readings_model');
    }

	public function getReadings()
	{   
        $this->rest->response(
            $this->Readings_model->getReadings()
        );
    }
}
