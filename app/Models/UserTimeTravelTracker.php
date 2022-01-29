<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTimeTravelTracker extends Model
{
    use HasFactory;
    protected $table = "tbl_user_time_travel_tracking";
    protected $fillable = ['travel_plan_id ','user_id','travel_date','day_start','day_end','day_end_status','start_lat','start_lng','end_lat','end_lng','end_lng'];
}
