<?php

namespace App\Http\Controllers;

use App\Models\Patience;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    //funtion for getting user chat
    public function index(){
        $userCount = Patience::count();


       $chart1 = (new LarapexChart)->pieChart()->setTitle('chart by age group')
            ->setLabels(['Age between 0 - 9','Age between 10 - 19', 'Age Between 20 -29','Age between 30 - 39','Age between 40 -49', 'Age Between 50 - 59','Age between 60 - 69','Age between 70 - 79','Age between 80 - 89','Age between 90 - 99'])
            ->setDataset([Patience::whereBetween('age',[0,9])->count(),Patience::whereBetween('age',[10,19])->count(),Patience::whereBetween('age',[20,29])->count(),Patience::whereBetween('age',[30,39])->count(),Patience::whereBetween('age',[40,49])->count(),Patience::whereBetween('age',[50,59])->count(),Patience::whereBetween('age',[60,69])->count(),Patience::whereBetween('age',[70,79])->count(),Patience::whereBetween('age',[80,89])->count(),Patience::whereBetween('age',[90,99])->count()])->toVue();




       $male   = Patience::where('gender', 'male')->count();
       $female = Patience::where('gender', 'female')->count();
       $chart = (new LarapexChart())->pieChart()->setTitle('Number of patience by gender')
            ->setLabels(['Male', 'Female'])
            ->setDataset([$male, $female])->toVue();
        return response(['chart' => $chart,'chart1'=>$chart1]);
    }
}
