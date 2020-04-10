<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;
use Google_Client;
use Google_Service_Analytics;

class Analytics extends Model
{
    // アナリティクスのデータ取得
    function getData($startData, $endData){
        $client = new Google_Client();
        $client->setApplicationName("Hello Analytics Reporting");
        // apiを有効にした時のjsonファイル読み込み
        $client->setAuthConfig("easylytics-1bfa5-0e566eaefda2.json");
        $client->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);
        try {
            $analytics = new Google_Service_Analytics($client);
            return $analytics->data_ga->get('ga:' . "206976859", $startData,$endData,['ga:pageviews']);
        } catch (\Google_Service_Exception $e) {
            //return "google エラーが発生";
        }
    } 
}
