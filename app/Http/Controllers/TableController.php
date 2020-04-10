<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;
use App\Models\API\Analytics;
use App\Models\API\Searchconsole;
use Response;
use Carbon\Carbon;

class TableController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if (isset($request->startdata) && isset($request->endata)) {
            $startData = $request->startdata;
            $endData = $request->enddata;
        } else {
            $startData = Carbon::tomorrow(('Asia/Tokyo'));
            $startData = $startData->format('Y-m-d');
            $endData = Carbon::tomorrow(('Asia/Tokyo'))->addWeek(1);
            $endData = $endData->format('Y-m-d');
        }

        $analytics = new Analytics();
        $analyticsData = $analytics->getData($startData,$endData);
        $searchconsole = new Searchconsole();
        $searchconsoleData = $searchconsole->getData($startData,$endData);

        return view(
            'tables/index',[
            'analyticsData' => $analyticsData,
            'searchconsoleData' => $searchconsoleData,
            ]);
    }
}
