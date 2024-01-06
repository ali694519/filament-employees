<?php

namespace App\Models;

use App\Models\State;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;
    protected $fillable=['country_code','name'];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
    public function states()
    {
        return $this->hasMany(State::class);
    }
}
