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
        'status',
        'id_domisili',
        'id_keahlian'
    ];

    public function penyewaan()
    {
        return $this->hasMany(Penyewaan::class);
    }

    public function domisili()
    {
        return $this->belongsTo(Domisili::class, 'id_domisili');
    }

    public function keahlian()
    {
        return $this->belongsTo(Keahlian::class, 'id_keahlian');
    }
}
