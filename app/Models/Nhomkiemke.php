<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nhomkiemke extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'nhomkiemke';

    protected $fillable = [
        'id',
        'tennhomkiemke'
    ];
    public function user()
    {
        return $this->hasMany(User::class, 'id');
    }
}