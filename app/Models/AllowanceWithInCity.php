<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllowanceWithInCity extends Model
{
    use HasFactory;
    protected $table = "tbl_allowance_within_city";
    protected $fillable = ['designation_id','designation_name','mode_of_transport','daily_food_allowance'];
}
