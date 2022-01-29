<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllowanceCityToCity extends Model
{
    use HasFactory;
    protected $table = "tbl_allowance_city_to_city_per_day";
    protected $fillable = ['designation_id','designation_name','transport_mode','hotel_rent_dhaka','other_hotel_rent',
     'no_voucher_rent_inside_dhaka','no_voucher_house_rent_divisional','no_voucher_house_rent_others','daily_food_allowance_for_travel'];
}
