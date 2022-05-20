<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loi extends Model
{

    use HasFactory;
    use SoftDeletes;
    protected $table = 'loi';

    protected $fillable = [
        'id',
        'macatruockhiloi',
        'ma_maytinh',
        'dientaloi',
        'trang_thai',
        'ngayphathienloi'
    ];
    public function ca()
    {
        return $this->belongsTo(Cahoc::class, foreignKey: 'macatruockhiloi');
    }
    public function maytinh()
    {
        return $this->belongsTo(Maytinh::class, foreignKey: 'ma_maytinh');
    }
}