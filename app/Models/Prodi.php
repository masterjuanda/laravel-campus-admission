<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodi';
    protected $primaryKey = 'idprodi';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'idprodi',
        'namafakultas',
        'namaprodi',
        'kodeprodi',
    ];
}
