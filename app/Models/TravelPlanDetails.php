<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelPlanDetails extends Model
{
    use HasFactory;
    protected $table = "tbl_travel_plan_details";
    protected $fillable = ['travel_plan_id','user_id','planned_date','route_id','route_no','route_name','route_details','createdby'];
}
