<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periods;

class PeriodController extends Controller
{
    public function period_page(){
        return view('period.period');
     }
    public function store(request $request){
        $New = new Periods();
        $New->date_period = $request->date_period;
        $New->start=$request->start;
        $New->end=$request->end;
        $New->detail=$request->detail;
        $New->save();

        return redirect()->route('period.create');
    }
    }