<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sensors extends CI_Controller 
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('Sensors_model');
    }

    public function getSensors()
    {
        $this->rest->response(
            $this->Sensors_model->getSensors()
        );
    }
}
