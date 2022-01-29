<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TotalStock extends Model
{
    use HasFactory;
    protected $table = "tbl_total_stock";
    protected $fillable = ['phone_id','stock','stock_cost','stock_date','createdby'];
}
