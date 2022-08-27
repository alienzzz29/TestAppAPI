<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['zone_id','barangay_id'];

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }
    public function barangay()
    {
        return $this->belongsTo(Barangay::class);
    }
}
