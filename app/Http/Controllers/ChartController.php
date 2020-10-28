<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Absensi;
use App\KasMasuk;
use App\KasKeluar;
use Charts;
use DB;

class ChartController extends Controller
{
    public function makeChart($type)

    {

        switch ($type) {

            case 'bar':

                
                $users = Absensi::where(DB::raw("(DATE_FORMAT(tgl_rapat,'%Y'))"),date('Y')) 
                        ->get();
                $hadir = Absensi::where(['status' => 'Hadir'])->get();
                $tidakHadir = Absensi::where(['status' => 'TidakHadir'])->get();

                // $charts = Charts::multiDatabase('areaspline', 'highcharts')
                // ->title('My nice chart')
                // ->colors(['#ff0000', '#ffffff'])
                // ->labels(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday','Saturday', 'Sunday'])
                // ->dataset('Hired', $user1s)
                // ->dataset('Not Hired', $user2s);

                $chart = Charts::multiDatabase('areaspline', 'highcharts') 

                            ->title("Grafik Absensi Kehadiran Anggota") 
                            ->colors(['#ff0000', '#000'])
                            ->elementLabel("Total Anggota") 

                            ->dimensions(1000, 500) 

                            ->responsive(true) 
                            ->dataset('Hadir', $hadir)
                            ->dataset('TidakHadir', $tidakHadir)

                            ->groupByMonth(date('Y'), true);

                break;



            case 'pie':
                $chart = Charts::create('pie', 'highcharts')

                ->title('HDTuto.com Laravel Pie Chart')

                ->labels(['Codeigniter', 'Laravel', 'PHP'])

                ->values([5,10,20])

                ->dimensions(1000,500)

                ->responsive(true);

                break;





            case 'donut':

                $chart = Charts::create('donut', 'highcharts')

                            ->title('HDTuto.com Laravel Donut Chart')

                            ->labels(['First', 'Second', 'Third'])

                            ->values([5,10,20])

                            ->dimensions(1000,500)

                            ->responsive(true);

                break;



            case 'line':

                $chart = Charts::create('line', 'highcharts')

                            ->title('HDTuto.com Laravel Line Chart')

                            ->elementLabel('HDTuto.com Laravel Line Chart Lable')

                            ->labels(['First', 'Second', 'Third'])

                            ->values([5,10,20])

                            ->dimensions(1000,500)

                            ->responsive(true);

                break;



            case 'area':

                $chart = Charts::create('area', 'highcharts')

                            ->title('HDTuto.com Laravel Area Chart')

                            ->elementLabel('HDTuto.com Laravel Line Chart label')

                            ->labels(['First', 'Second', 'Third'])

                            ->values([5,10,20])

                            ->dimensions(1000,500)

                            ->responsive(true);

                break;



            case 'geo':

                $chart = Charts::create('geo', 'highcharts')

                            ->title('HDTuto.com Laravel GEO Chart')

                            ->elementLabel('HDTuto.com Laravel GEO Chart label')

                            ->labels(['ES', 'FR', 'RU'])

                            ->colors(['#3D3D3D', '#985689'])

                            ->values([5,10,20])

                            ->dimensions(1000,500)

                            ->responsive(true);

                break;



            default:

                # code...

                break;

        }

        return view('charts.charts', compact('chart'));

    }
}
