<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliceClearanceCertificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'pcc_number',
        'issued_date'
    ];

    // public function pccDetails()
    // {
    //     return $this->hasMany(PoliceClearanceCertificateDetails::class);
    // }
}
