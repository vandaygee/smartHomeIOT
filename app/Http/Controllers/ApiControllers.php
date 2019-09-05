<?php


namespace App\Http\Controllers;


class ApiControllers extends Controller
{
    public function iot_controller(){
        $app_data = json_decode($this->get_Json());
        $pass_data = [];
        $pass_data["temp_max"]=$app_data->temp_max;
        $pass_data["temp_min"]=$app_data->temp_min;
        $pass_data["pressure_max"]=$app_data->pressure_max;
        $pass_data["pressure_min"]=$app_data->pressure_min;
        $pass_data["humidity_max"]=$app_data->humidity_max;
        $pass_data["humidity_min"]=$app_data->humidity_min;
        $pass_data["chloro_max"]=$app_data->chloro_max;
        $pass_data["chloro_min"]=$app_data->chloro_min;
        $pass_data["water_max"]=$app_data->water_max;
        $pass_data["water_min"]=$app_data->water_min;
        $pass_data["light_max"]=$app_data->light_max;
        $pass_data["light_min"]=$app_data->light_min;
        //$pass_data["page"] = "controllers";

        return json_encode($pass_data);
        //return view('iotcontroller',$pass_data);
    }


    public function get_Json(){
        $my_path = base_path('app_data\test.json');
        $strJsonFileContents = file_get_contents($my_path);
        return $strJsonFileContents;
    }
}