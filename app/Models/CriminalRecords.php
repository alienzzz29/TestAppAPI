<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CriminalRecords extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'date_of_birth',
        'co_id',
        'criminal_case_no',
        'is_no',
        'remarks'
    ];

    public function pccds()
    {
        return $this->hasMany(PoliceClearanceCertificateDetails::class);
    }
    
    public function crimeOffense()
    {
        return $this->belongsTo(CrimeOffense::class);
    }
}
