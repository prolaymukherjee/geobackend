<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneModel extends Model
{
    use HasFactory;
    protected $table = "tbl_phone_model";
    protected $fillable = ['phone_id','phone_model','base_price','createdby'];
}
