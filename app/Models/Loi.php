<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loi extends Model
{
    use HasFactory;
    protected $fillable = [
        'macatruockhiloi',
        'dientaloi',
        'trang_thai'
    ];
}

