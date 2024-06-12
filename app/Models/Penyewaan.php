<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    use HasFactory;

    protected $table = 'penyewaan';
    protected $fillable = [
        'status',
        'tanggal',
        'keterangan',
        'id_user',
        'id_art'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function art()
    {
        return $this->belongsTo(Art::class, 'id_art');
    }
}
