<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;
use Google_Client;
use Google_Service_Webmasters;
use Google_Service_Webmasters_SearchAnalyticsQueryRequest;

class Searchconsole extends Model
{
    function getData($startData, $endData){
        $client = new Google_Client();
        $client->setAuthConfig("easylytics-1bfa5-0e566eaefda2.json");
        $client->addScope(['https://www.googleapis.com/auth/webmasters.readonly']);
        $query = new Google_Service_Webmasters_SearchAnalyticsQueryRequest;
        $serch_console = new Google_Service_Webmasters($client); 
        $query->setDimensions(array('page','query'));
        $query->setStartDate($startData);
        $query->setEndDate($endData);
        $query->setSearchType('web');
        $resulets = array();
        try {
            return $serch_console->searchanalytics->query("https://", $query);   
            
        } catch (\Google_Service_Exception $e) {
            return "google エラーが発生";
        }
    }
}
