<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetClaimCostDetails extends Model
{
    use HasFactory;
    protected $table = "tbl_budget_claim_cost_details";
    protected $fillable = ['travel_plan_id','user_id','username','designation','planned_date','bus_fare','bus_location','rikshaw_fare',
    'rikshaw_location','cng_fare','cng_location','bike_fare','bike_location','distance_type','city_type','voucher_status','food_allowance',
    'food_location','hotel_rent_allowance','user_remarks','admin_remarks','total_budget_claim','approvedby'];
}
