<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class main extends Controller
{
    public function dashboard()
    {
        return view('dashboardguru');
    }

    public function tes()
    {
        return view(view: 'dashboard'); 
    }

}
