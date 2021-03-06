<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cars extends CI_Controller 
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('Cars_model');
    }

    public function index()
    {
        $data['page'] = 'Cars/index';
        $this->load->view('interface', $data);
    }

    public function setCar()
	{
        $post = $this->rest->post();
        $this->Cars_model->setCar($post);
    }

    public function putCar($id)
    {
        $this->Cars_model->putCar($id);
    }
    
    public function getCar($id)
	{   
        $this->rest->response(
            $this->Cars_model->getCar($id)
        );
    }

	public function getCars()
	{
        $this->rest->response(
            $this->Cars_model->getCars()
        );
    }
}
