<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phongmay extends Model
{
    use HasFactory;
    protected $table = 'phongmay';

    protected $fillable = [
        'tenphongmay'
    ];
}