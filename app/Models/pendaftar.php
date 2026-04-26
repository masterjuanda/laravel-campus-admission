<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pendaftar extends Model
{
    protected $table = 'pendaftar';
    protected $primaryKey = 'idpendaftar';
    public $incrementing = false;
    protected $fillable = [
        'idpendaftar',
        'namalengkap',
        'email',
        'nohp',
        'tgllahir',
        'alamat',
        'namafakultas',
        'namaprodi'
    ];
}
