<?php

namespace App\Models;

use App\Models\State;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;
    protected $fillable=['state_id','name'];
    public function state()
    {
        return $this->belongsTo(State::class,'city_id');
    }
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
