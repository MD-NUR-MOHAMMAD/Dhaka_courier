<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Parcel;

class Transport extends Model
{
    use HasFactory;
    protected $fillable = [
        'company',
        'delivery_boy',
        'address_from',
        'address_to',
        'mobile',
        'nid',
    ];
    public function parcels()
    {
        return $this->belongsToMany(Parcel::class);
    }
}
