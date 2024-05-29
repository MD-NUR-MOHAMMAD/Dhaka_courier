<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Transport;

class Parcel extends Model
{
    use HasFactory;
    public function employees(){
        return $this->belongsToMany(Employee::class);
    }
    public function transports(){
        return $this->belongsToMany(Transport::class);
    }
}
