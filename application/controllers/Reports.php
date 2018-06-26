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

    public function getReportsSensors($id_import)
    {
        $this->rest->response(
            $this->Reports_model->getReportsSensors($id_import)
        );
    }

    public function getReportsAbstract($id_import)
    {
        $data = $this->Reports_model->getReportsAbstract($id_import);

        $response = [
            'id' => 'reportAbstract',
            'title' => 'Resumo gráfico',
            'subtitle' => 'Temperatura X Sensor',
            'yTitle' => 'Temperatura (°C)'
        ];

        foreach ($data as $key => $value) {
            $response['categories'][] = $value['name_sensor'];
            $response['series'][0]['name'] = 'Média de temperatura';
            $response['series'][0]['data'][] = floatval($value['avg_value']);
        }

        $this->rest->response($response);
    }

    public function getReportsDetailed($id_import, $id_sensor)
    {
        $data = $this->Reports_model->getReportsDetailed($id_import, $id_sensor);

        $response = [
            'id' => 'reportDetailed',
            'title' => 'Sensor',
            'subtitle' => 'Temperatura X Tempo',
            'yTitle' => 'Temperatura (°C)'
        ];

        foreach ($data as $key => $value) {
            $response['categories'][] = $value['dt_reading'];
            $response['series'][0]['name'] = 'Sensor';
            $response['series'][0]['data'][] = floatval($value['value']);
        }
        
        $this->rest->response($response);
    }
}
