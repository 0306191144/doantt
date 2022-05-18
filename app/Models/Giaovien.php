<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Giaovien extends Model
{

    protected $table = 'giaovien';
    use HasFactory;
    protected $fillable = [
        'id',
        'ten_giaovien',
    ];
    public function cahoc()
    {
        return $this->hasMany(Cahoc::class, 'id');
    }
}