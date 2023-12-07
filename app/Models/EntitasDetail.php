<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntitasDetail extends Model
{
    use HasFactory;
    protected $table = 'entitas_detail';
    protected $fillable = [
        'id_entitas',
        'kolom',
        'tipe_data',
        'pk'
    ];
}
