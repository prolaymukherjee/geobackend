<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $table = "tbl_order_details";
    protected $fillable = ['order_id','customer_id','model','color','imei1','imei2','serial_no','carton_no','price','discount_percent','discounted_price','createdby'];
}
