<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cahoc extends Model
{
    use HasFactory;
    protected $fillable = [
        'ma_giaovien',
        'ma_lophoc',
        'ma_phongmay',
        'ma_userkiemtra'
    ];
}
