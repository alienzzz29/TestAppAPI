<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory;
    use SoftDeletes;

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
