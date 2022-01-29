<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "tbl_order";
    protected $fillable = ['customer_type','customer_id','quantity','discount','payment_amount','payment_advance','payment_due','payment_method','transaction_reference','special_instructions','status','createdby'];
}
