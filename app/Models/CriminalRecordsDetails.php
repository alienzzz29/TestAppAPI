<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CriminalRecordsDetails extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'cr_id',
        'co_id',
        'cr_remarks'
    ];

    public function criminalRecord()
    {
        return $this->belongsTo(CriminalRecords::class);
    }

    public function crimeOffense()
    {
        return $this->belongsTo(CrimeOffense::class);
    }
}
