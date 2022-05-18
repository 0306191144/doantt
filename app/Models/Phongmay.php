<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Phongmay extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'phongmay';

    protected $fillable = [
        'id',
        'tenphongmay'
    ];
    public function cahoc()
    {
        return  $this->hasMany(Cahoc::class, 'id');
    }
}