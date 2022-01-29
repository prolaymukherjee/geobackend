<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelPlan extends Model
{
    use HasFactory;

    protected $table = "tbl_travel_plan";
    protected $fillable = ['travel_plan_id','user_id','username','designation','region_id','region_name','sub_region_id','sub_region_name','route_ids','planned_date','distance_type','status','travel_start_status','travel_end_status','base_station','createdby','acceptedby'];
}
