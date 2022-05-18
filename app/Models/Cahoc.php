<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Cahoc extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'cahoc';
    protected $fillable = [
        'id',
        'ma_giaovien',
        'ma_lophoc',
        'ma_phongmay',
        'ma_userkiemtra'
    ];
}