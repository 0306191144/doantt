<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lophoc extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'lophoc';
    protected $fillable = [
        'id',
        'tenlophoc'
    ];
}