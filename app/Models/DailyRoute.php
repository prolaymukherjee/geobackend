<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyRoute extends Model
{
    use HasFactory;
    protected $table = "tbl_daily_routes";
    protected $fillable = ['region_id','region_name','sub_region_id','sub_region_name','assigned_area_id','assigned_area_name','assigned_date',
    'rsm_id','rsm_name','asm_id','asm_name','tse_id','tse_name','createdby'];
}
