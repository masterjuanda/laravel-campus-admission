<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    protected $table = 'matakuliah';
    protected $primaryKey = 'idmatakuliah';
    public $incrementing = false;
    protected $fillable = [
        'idmatakuliah',
        'kodematakuliah',
        'namamatakuliah',
        'sks',
    ];
}
