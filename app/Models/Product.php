<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "tbl_products";
    protected $fillable = ['phone_model','phone_imei_1','phone_imei_2','phone_color','phone_sl_no','onhold','sold','invoice_no','received_date','carton_no','dp','rp','mrp','dsp','entryby'];
}
