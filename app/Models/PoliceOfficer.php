<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PoliceOfficer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'contact_no',
        'police_sig',
        'rank_id',
        'position_id'
    ];

    public function pccds()
    {
        return $this->hasMany(PoliceClearanceCertificateDetails::class);
    }
    
    public function rank()
    {
        return $this->belongsTo(Rank::class);
    }
    public function position()
    {
        return $this->belongsTo(position::class);
    }
    public function oic()
    {
        return $this->hasMany(OIC::class);
    }
}
