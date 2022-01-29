<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistributorContact extends Model
{
    use HasFactory;
    protected $table = "tbl_distributor_contact";
    protected $fillable = ['distributor_id','name','designation','phone'];
}
