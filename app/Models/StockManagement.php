<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockManagement extends Model
{
    use HasFactory;

    protected $table = "tbl_stock_management";
    protected $fillable = ['phone_id','distributor_id','stock','stock_date','stock_cost','createdby'];


}
