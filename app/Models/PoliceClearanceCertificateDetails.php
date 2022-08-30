<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PoliceClearanceCertificateDetails extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'applicant_id',
        'pcc_id',
        'purpose_id',
        'findings_id',
        'ctc_id',
        'police_id',
        'payment_id',
        'oic_id',
        'status'
    ];
}
