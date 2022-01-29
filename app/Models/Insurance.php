<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;
    protected $table = "tbl_insurance";
    protected $fillable = ['brand','carton_no',' imei1','imei2','mobileno','name','fathername','mothername','address','dob','nid','nominee_name','nominee_fathername','nominee_mothername','nominee_address','nominee_nid','file_applicant','file_nid_front','file_nid_back','  file_nid_front_nominee','file_nid_back_nominee'];
}
