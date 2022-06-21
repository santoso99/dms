<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poliklinik extends Model
{
    use HasFactory;
    protected $table = 'poliklinik';

    public function jnsPerawatan()
    {
        return $this->hasMany(JnsPerawatan::class, 'kd_poli', 'kd_poli');
    }
}
