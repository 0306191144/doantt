<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maytinh extends Model
{
    use HasFactory;
    protected $fillable = [
        'tenmaytinh',
        'mota',
        'ram',
        'cpu',
        'screen',
        'ma_phong'
    ];
}
