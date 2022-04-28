<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function agents(){
        return $this->belongsTo(Agent::class, 'FK_agent_code', 'agent_code');
    }

    public function orders(){
        return $this->hasMany(Order::class, 'FK_cust_code', 'cust_code');
    }
}
