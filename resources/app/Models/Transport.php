<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Parcel;

class Transport extends Model
{
    use HasFactory;
    public function parcels(){
        return $this->belongsToMany(Parcel::class);
    }
}
