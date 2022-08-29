<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Findings extends Model
{
    use HasFactory;

    protected $fillable = [
        'findings_remarks',
        'findings_signature',
        'user_id'
    ];
}
