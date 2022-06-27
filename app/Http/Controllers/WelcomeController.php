<?php

namespace App\Http\Controllers;

use App\Models\Graph;
use App\Models\Shifts;
use App\Models\Stoppers;
use App\Models\Tonnages;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public  function show() {



        return view('welcome', [
            'stoppers' => Stoppers::take(10)->latest()->orderBy('duration', 'desc')->get(),
            'tonnages'=>Tonnages::latest()->get(),
            'shifts'=>Shifts::latest()->get(),
            'graph'=>Graph::latest()->get()
        ]);
    }

    public function graph(){

        Graph::where('id',1)->update([
            'availability'=> rand(0,100),
            'performance'=> rand(0,100),
            'quality'=> rand(0,100),
            'OEE'=> rand(0,100),
        ]);
        $graph = Graph::latest()->take(1)->get();

        return view('graph' , compact('graph'));

    }

    public function shifts(){

        $shifts = Shifts::latest()->get();

        $this->console_log($shifts);

        return view('shifts' , compact('shifts' ));
    }

    function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
    }

}
