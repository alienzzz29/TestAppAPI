<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Findings extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'pcc_id',
        'cr_id'
    ];

    public function pcc()
    {
        return $this->belongsTo(PoliceClearanceCertificate::class);
    }

    public function criminalRecords()
    {
        return $this->belongsTo(CriminalRecords::class);
    }
}
