<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaveRouteDetails extends Model
{
    use HasFactory;
    protected $table = "tbl_saved_route_details";
    protected $fillable = ['route_id','assigned_area_id','area_name'];
}
