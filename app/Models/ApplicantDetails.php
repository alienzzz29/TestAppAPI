<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApplicantDetails extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'applicant_id',
        'applicant_qr',
        'applicant_img',
        'applicant_sig',
        'applicant_thumb'
    ];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
}
