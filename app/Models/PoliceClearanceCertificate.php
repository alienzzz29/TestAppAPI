<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PoliceClearanceCertificate extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'pcc_number',
        'issued_date'
    ];

    // public function pccDetails()
    // {
    //     return $this->hasMany(PoliceClearanceCertificateDetails::class);
    // }

    public function pccds()
    {
        return $this->hasMany(PoliceClearanceCertificateDetails::class);
    }

    public function findings()
    {
        return $this->hasMany(Findings::class);
    }
}
