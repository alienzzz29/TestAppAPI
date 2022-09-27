<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'or_number',
        'payment',
        'user_id'
    ];

    public function pccds()
    {
        return $this->hasMany(PoliceClearanceCertificateDetails::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
