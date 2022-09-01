<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Applicant extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'contact_no',
        'date_of_birth',
        'place_of_birth',
        'civil_status',
        'height',
        'sex',
        'nationality',
        'address_id'
    ];

    public function pccds()
    {
        return $this->hasMany(PoliceClearanceCertificateDetails::class);
    }
    
    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function applicantDetails()
    {
        return $this->hasMany(ApplicantDetails::class);
    }
}
