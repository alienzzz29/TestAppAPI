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
        'applicant_qr',
        'applicant_img',
        'applicant_sig',
        'applicant_thumb',
        'address_id'
    ];
}
