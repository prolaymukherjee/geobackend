<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ASM extends Model
{
    use HasFactory;
    protected $table = "tbl_asm";
    protected $fillable = ['user_id','user_name','full_name','phone_no','base_station','rsm_id','rsm_name','is_assigned','createdby','created'];
}
