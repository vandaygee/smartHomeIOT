<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
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
        $pass_data["page"] = "controllers";

        //dd($pass_data);
        return view('iotcontroller',$pass_data);
    }

    public function sensor(){
        $app_data = json_decode($this->get_Json());
        $pass_data=[];
        $pass_data['temp_sens'] = $app_data->temp_sens;
        $pass_data['humidity_sens'] = $app_data->humidity_sens;
        $pass_data['pressure_sens'] = $app_data->pressure_sens;
        $pass_data['light_sens'] = $app_data->light_sens;
        $pass_data['door_sens'] = $app_data->door_sens;
        $pass_data['window_sens'] = $app_data->window_sens;
        $pass_data['page']='sensors';
        return view('sensor',$pass_data);
    }

    public function actuator($view="normal"){
        $app_data = json_decode($this->get_Json());
        $pass_data=[];
        $pass_data['dehumidifier'] = $app_data->dehumidifier;
        $pass_data['heater'] = $app_data->heater;
        $pass_data['coolant'] = $app_data->coolant;
        $pass_data['fire_alarm'] = $app_data->fire_alarm;
        $pass_data['c02_alarm'] = $app_data->c02_alarm;
        $pass_data['door_alarm'] = $app_data->door_alarm;
        $pass_data['page']='actuators';
        $pass_data['view'] = $view;
        return view('actuator',$pass_data);
    }

    public function get_Json(){
        $my_path = base_path('app_data\test.json');
        $strJsonFileContents = file_get_contents($my_path);
        return $strJsonFileContents;
    }

    public function receive_json(Request $request){
        $data_from_request = $request->json()->all();
        $server_path = base_path('app_data\test.json');
        $server_heater_log_file =  base_path('app_data\heaterlog.json');

        $server_heater_data = file_get_contents($server_heater_log_file);
        $server_heater_data_decode = json_decode($server_heater_data);
        $server_heater_data_decode[] = $data_from_request["log"];
        file_put_contents($server_heater_log_file,json_encode($server_heater_data_decode));

        $server_json = file_get_contents($server_path);
        $server_json_decode = json_decode($server_json);
        $server_json_decode->heater = $data_from_request["heater"];

        $json_data = json_encode($server_json_decode);
        $success = file_put_contents($server_path, $json_data);

        return $success;
    }

    public function receive_json1($json){
       // $data_from_request = $request->json()->all();
//        $server_path = base_path('app_data\receive.json');
//
//        $server_json = file_get_contents($server_path);
//        $server_json_decode = json_decode($server_json);
//        $server_json_decode->heater = $data_from_request["heater"];



//
//
//        $json_data = json_encode($server_json_decode);
////        $path = base_path('app_data\receive.json');
//        $success = file_put_contents($server_path, $json_data);
//        return $success;




        $order = $json;
        $obj = json_decode($order);
        $name = $obj -> {"name"};
        $food = $obj -> {"food"};
        $quty = $obj -> {"quantity"};
        if ($food == "pizza") {
            $price = 4.99;
        } else if ($food == "hamburger") {
            $price = 3.33;
        } else {
            $price = 0;
        }
        $price = $price * $quty;
        if ($price == 0) {
            $status = "not-accepted";
        } else {
            $status = "accepted";
        }
        $array = array("name" => $name, "food" => $food, "quantity" => $quty, "price" => $price, "status" => $status);
        echo json_encode($array);



    }

    public function save_Json(Request $request){
        $data = $request->json()->all();
        $json_data = json_encode($data);
        print_r($json_data);
        $path = base_path('app_data\test.json');
        $success=file_put_contents($path, $json_data);
        return $success;
    }

    public function view_logs($page){
        if($page=="heater"){
            $data = [];
            $data["page_title"] = "Heater Logs";
            $data_file = base_path('app_data\heaterlog.json');
            $data_on_server = file_get_contents($data_file);
            $data_object = json_decode($data_on_server);
            $data["logs"] = $data_object;
            //dd($data["logs"][13]->temp_value);
            return view('logs',$data);
        }
    }

    public function test_View(){
        return "this is test page";
    }
}
