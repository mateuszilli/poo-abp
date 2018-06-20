<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Values extends CI_Controller 
{
    function __construct() 
    {
        parent::__construct();
        set_time_limit(120);
        $this->load->model('Readings_model');
        $this->load->model('Sensors_model');
        $this->load->model('Values_model');
    }

    public function setValues()
	{
        $post = $this->rest->post();
        $arq = $_FILES;

        print_r($post);
        print_r($arq);
        exit;
        $file = new DomDocument();
        $file->load($arq);
        $lines = $file->getElementsByTagName('Row');
        foreach ($lines as $key => $line) {
            if ($key == 0) {
                $length = $line->getElementsByTagName('Data')->length;
                for ($i=1; $i < $length; $i++) { 
                    $name_sensor = $line->getElementsByTagName('Data')->item($i)->nodeValue;
                    $id_sensor[$i] = $this->Sensors_model->setSensor([
                        'name_sensor' => $name_sensor
                    ]);
                }
            } else {
                $time = $line->getElementsByTagName('Data')->item(0)->nodeValue;
                $id_reading = $this->Readings_model->setReading([
                    'id_car' => $id_car,
                    'dt_reading' => $time
                ]);
                for ($i=1; $i < $length; $i++) {
                    if (isset($line->getElementsByTagName('Data')->item($i)->nodeValue)) {
                        $value = $line->getElementsByTagName('Data')->item($i)->nodeValue;
                    } else {
                        $value = null;
                    }
                    $this->Values_model->setValue([
                        'id_reading' => $id_reading,
                        'id_sensor' => $id_sensor[$i],
                        'value' => $value
                    ]);
                }
            }
        }     
    }

    public function getValues()
    {
        $this->rest->response(
            $this->Values_model->getValues()
        );
    }
}
