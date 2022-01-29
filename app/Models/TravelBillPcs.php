<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelBillPcs extends Model
{
    use HasFactory;

    protected $table = "tbl_travel_bill_pics";
    protected $fillable = ['travel_plan_id','user_id','username','allowance_type','filename','image'];
}
