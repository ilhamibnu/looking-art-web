<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    use HasFactory;

    protected $table = 'art';
    protected $fillable = [
        'name',
        'jenis_kelamin',
        'tgl_lahir',
        'alamat',
        'foto',
        'status'
    ];

    public function penyewaan()
    {
        return $this->hasMany(Penyewaan::class);
    }
}
