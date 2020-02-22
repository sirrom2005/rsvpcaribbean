<?php
include_once('common.php');
class Time extends common {

    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        c('#mmtime')->attr('class','list-group-item active');
        $this->appendView("time-in-destinations.view.php");
    }

    protected function _load() {
        $rs = $this->db->table('view_time_zone');
        $html = null;
        foreach ($rs as $key => $value) {
            $time = $this->get_timee($value['time_zone']);   
            if($time){
                $html .= "<li><img src='views/images/flags/{$value['country_code']}.png' /> <span>{$time}</span> {$value['country']}</li>";
            }
        }
        $this->data->html($html);
    }
    
    protected function get_timee($country)
    {
        /*$country = str_replace(' ', '', $country);
        $city = str_replace(' ', '', $city);
        $geocode_stats = file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?address=$country&sensor=false");
        $output_deals = json_decode($geocode_stats);
        $latLng = $output_deals->results[0]->geometry->location;
        $lat = $latLng->lat;
        $lng = $latLng->lng;    
        $google_time = file_get_contents("https://maps.googleapis.com/maps/api/timezone/json?location=$lat,$lng&timestamp=1331161200&key=");
        $timez = json_decode($google_time);*/
        try{
            $timeZone = new DateTimeZone($country); //print_r($timeZone);
            $d = new DateTime("now",$timeZone);   
            return  $d->format('h : i: s a');
        }catch(Exception $e) {
            //echo $msg = $e;
            //$this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            //$this->Raxan->debug($msg.' '.$e);
            return false;
        }
        
    }
}