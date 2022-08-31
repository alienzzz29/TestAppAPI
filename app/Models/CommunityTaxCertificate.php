<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CommunityTaxCertificate extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'ctc_number',
        'ctc_dateissue',
        'ctc_placeissue',
    ];

    public function pccds()
    {
        return $this->hasMany(PoliceClearanceCertificateDetails::class);
    }
}
