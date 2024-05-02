<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\periods;

class PeriodController extends Controller
{
    
    public function period_page()
    {
        return view('period.period');
    }
    public function store(request $request){
     $period = new periods();
     $period->date_period = $request->date_period;
     $period->save();
     return redirect()->back();
    }
}