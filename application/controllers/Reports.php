<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller 
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('Reports_model');
    }

    public function index()
    {
        $data['page'] = 'Reports/index';
        $this->load->view('interface', $data);
    }

    public function getReports()
    {
        $data = $this->Reports_model->getReports();

        $response = [
            'id' => 'reportDetailed',
            'title' => 'Resumo gráfico',
            'subtitle' => 'Temperatura X Sensor',
            'yTitle' => 'Temperatura °C'
        ];

        foreach ($data as $key => $value) {
            $response['categories'][] = $value['name_sensor'];
            $response['series'][0]['name'] = 'Média de temperatura';
            $response['series'][0]['data'][] = floatval($value['avg_value']);
        }

        $this->rest->response($response);
    }
}
