<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubRegion extends Model
{
    use HasFactory;

    protected $table = "tbl_sub_regions";
    protected $fillable = ['sub_region_id','sub_region_name','region_id','region_name','rsm_name','rsm_id','asm_id','asm_name','createdby'];
}
