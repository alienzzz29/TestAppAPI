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
        'ctc_id',
        'police_id',
        'payment_id',
        'oic_id',
        'status'
    ];

    public function pcc()
    {
        return $this->belongsTo(PoliceClearanceCertificate::class);
    }

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }

    public function purpose()
    {
        return $this->belongsTo(Purpose::class);
    }

    public function ctc()
    {
        return $this->belongsTo(CommunityTaxCertificate::class);
    }

    public function policeOfficer()
    {
        return $this->belongsTo(PoliceOfficer::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function oic()
    {
        return $this->belongsTo(OIC::class);
    }

}
