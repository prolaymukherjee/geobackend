<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignedArea extends Model
{
    use HasFactory;
    protected $table = "tbl_assigned_area";
    protected $fillable = ['assigned_area_id','assigned_area_name','region_id','sub_region_id','rsm_id','rsm_name','asm_id','asm_name','tse_name',' tse_id','is_mobile','accepted_status','createdby','created'];
}
