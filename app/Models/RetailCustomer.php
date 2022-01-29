<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RetailCustomer extends Model
{
    use HasFactory;
    protected $table = "tbl_retail_customer";
    protected $fillable = ['customer_id','customername','mobileno','address','thana','district','createdby'];
}
