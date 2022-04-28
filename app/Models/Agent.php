<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    public function customers(){
        return $this->hasMany(Customer::class, 'FK_agent_code', 'agent_code');
    }

    public function orders(){
        return $this->hasMany(Order::class, 'FK_agent_code', 'agent_code');
    }
}
