<?php

namespace Modules\CRM\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Clients extends Model
{
    use HasFactory;

    protected $table = ['crm_clients'];
    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\CRM\Database\factories\ClientsFactory::new();
    }
}
