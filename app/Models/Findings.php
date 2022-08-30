<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Findings extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'is_cleared',
        'findings_remarks',
        'user_id'
    ];
}
