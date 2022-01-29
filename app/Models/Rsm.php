<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rsm extends Model
{
    use HasFactory;
    protected $table = "tbl_rsm";
    protected $fillable = ['user_id','user_name','full_name','phone_no','base_station_id','base_station','createdby'];
}
