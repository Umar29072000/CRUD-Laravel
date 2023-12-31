<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nrp',
        'alamat',
        'instagram',
        'linkedin',
        'github',
        'content',
        'image'
    ];
}