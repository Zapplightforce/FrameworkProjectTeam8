<?php

namespace App\Http\Controllers;

use App\Models\Graph;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class GraphController extends Controller
{
    public function index()
    {

        Graph::where('id',1)->update([
            'availability'=> rand(0,100),
            'performance'=> rand(0,100),
            'quality'=> rand(0,100),
            'OEE'=> rand(0,100),
        ]);
        $graph = Graph::latest()->take(1)->get();

        return view('graph' , compact('graph'));

    }

    function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
    }
}
