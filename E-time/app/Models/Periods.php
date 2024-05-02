<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periods extends Model
{
    use HasFactory;

    protected $fillable= [
   // id	date_period	start	end	detail	created_at	updated_at
   'date_period', 'start', 'end', 'detail',
    ];
}
