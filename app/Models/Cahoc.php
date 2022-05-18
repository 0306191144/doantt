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
        'tencahoc',
        'ma_giaovien',
        'ma_lophoc',
        'ma_phongmay',
        'ma_userkiemtra'
    ];
    public function giaovien()
    {
        return $this->belongsTo(Giaovien::class, foreignKey: 'ma_giaovien');
    }
    public function Lophocv()
    {
        return $this->belongsTo(Lophoc::class, foreignKey: 'ma_lophoc');
    }
    public function maphongmaytinh()
    {
        return $this->belongsTo(Phongmay::class, foreignKey: 'ma_phongmay');
    }
    public function user()
    {
        return $this->belongsTo(User::class, foreignKey: 'ma_userkiemtra');
    }
}