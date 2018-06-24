<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Values extends CI_Controller 
{
    function __construct() 
    {
        parent::__construct();
    }

    public function getValues()
    {
        $this->rest->response(
            $this->Values_model->getValues()
        );
    }
}
