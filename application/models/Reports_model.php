<?php

class Reports_model extends CI_Model 
{
    function __construct() 
    {
        parent::__construct();
    }

    public function getReportsAbstract($id_import)
	{
        return $this->db->select("View_reports.id_sensor, View_reports.name_sensor")
                        ->select_avg("View_reports.value", "avg_value")
                        ->where("View_reports.id_import", $id_import)
                        ->group_by("View_reports.id_sensor, View_reports.name_sensor")
                        ->get("View_reports")
                        ->result_array();
    }

    public function getReportsSensors($id_import)
    {
        return $this->db->select("View_reports.id_sensor, View_reports.name_sensor")
                        ->where("View_reports.id_import", $id_import)
                        ->group_by("View_reports.id_sensor, View_reports.name_sensor")
                        ->get("View_reports")
                        ->result_array();
    }

    public function getReportsDetailed($id_import, $id_sensor)
    {
        return $this->db->where("View_reports.id_import", $id_import)
                        ->where("View_reports.id_sensor", $id_sensor)
                        ->get("View_reports")
                        ->result_array();
    }
}