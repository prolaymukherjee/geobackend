<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = "tbl_product_model";
    protected $fillable = ['name','phone_model','phone_color','dp','rp','mrp','dsp','sp','createdby','carton_no','dp','rp','mrp','dsp','entryby','deleted'];
}
