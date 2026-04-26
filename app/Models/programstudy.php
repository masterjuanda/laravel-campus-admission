<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class programstudy extends Model
{
    protected $table = 'programstudy';
    protected $primaryKey = 'idprodi';
    public $incrementing = false;
    protected $fillable = [
        'idprodi',
        'namafakultas',
        'namaprodi',
        'kodeprodi',
    ];
}
