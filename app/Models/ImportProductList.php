<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportProductList extends Model
{
    use HasFactory;
    protected $table = "tbl_im_pre_productlist";
    protected $fillable = ['lcno','carton_no',' imei1','imei2','serialno','model','color','stock_status','oemname','skdept','createdby'];
}
