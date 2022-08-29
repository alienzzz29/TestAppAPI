<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliceClearanceCertificateDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id',
        'pcc_id',
        'purpose_id',
        'findings_id',
        'ctc_id',
        'user_id',
        'payment_id',
        'status'
    ];
}
