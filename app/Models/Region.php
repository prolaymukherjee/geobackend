<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $table = "tbl_regions";
    protected $fillable = ['region_id','region_name','rsm_id','rsm_name','is_assigned','createdby'];
}
