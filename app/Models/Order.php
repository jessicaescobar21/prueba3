<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function agents(){
        return $this->belongsTo(Agent::class, 'FK_agent_code', 'agent_code');
    }

    public function customers(){
        return $this->belongsTo(Customer::class, 'FK_cust_code', 'cust_code');
    }
}
