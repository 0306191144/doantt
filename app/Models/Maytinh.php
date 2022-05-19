<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Maytinh extends Model
{
    use HasFactory;
    protected $table = 'maytinh';

    protected $fillable = [
        'id',
        'tenmaytinh',
        'mota',
        'ram',
        'cpu',
        'ocung',
        'ma_phongmay'
    ];
    public function phongmay()
    {
        return $this->belongsTo(Phongmay::class, foreignKey: 'ma_phongmay');
    }
}