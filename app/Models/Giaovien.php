<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Giaovien extends Model
{
    protected $table = 'giaovien';
    use HasFactory;
    protected $fillable = [
        'ten_giaovien',
    ];
}