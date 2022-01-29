<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderLog extends Model
{
    use HasFactory;
    protected $table = "tbl_order_log";
    protected $fillable = ['action','order_id','customer_id','param','createdby'];
}
