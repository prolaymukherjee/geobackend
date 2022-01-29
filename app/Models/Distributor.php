<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    use HasFactory;
    protected $table = "tbl_distributor";
    protected $fillable = ['distributor_code','companyname','ownername','telephone','address','thana','district','createdby'];
}
