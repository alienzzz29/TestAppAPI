<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunityTaxCertificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'ctc_number',
        'ctc_dateissue',
        'ctc_placeissue',
    ];
}
