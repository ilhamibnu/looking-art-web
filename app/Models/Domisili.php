<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domisili extends Model
{
    use HasFactory;

    protected $table = 'domisili';

    protected $fillable = [
        'name',
    ];

    public function art()
    {
        return $this->hasMany(Art::class);
    }
}
