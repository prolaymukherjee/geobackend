<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransportationList extends Model
{
    use HasFactory;

    protected $table = "tbl_transportation_list";
    protected $fillable = ['transport_medium'];
}
