<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistributorBankInfo extends Model
{
    use HasFactory;
    protected $table = "tbl_distributor_bank_info";
    protected $fillable = ['distributor_id','bankname','acc_name','accno','acctype','swiftcode','branch','address'];
}
