<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaveRoute extends Model
{
    use HasFactory;

    protected $table = "tbl_saved_routes";
    protected $fillable = ['route_id','route_no','user_id','username','designation','region_id','sub_region_id','route_name','route_details','  createdby'];

}
