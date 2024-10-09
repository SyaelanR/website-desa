<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class main extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function visiMisi(){
        return view(view: 'visiMisi');
    }

    public function tes(){
        return view(view: 'tes'); 
    }

}
