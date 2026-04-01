<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class peminjaman_buku extends Model
{
    protected $table = 'peminjaman_buku';
    protected $guarded = [];

    public function buku()
    {
        return $this->belongsTo(buku::class, 'buku_id');
    }

    public function anggota()
    {
        return $this->belongsTo(anggota::class, 'anggota_id');
    }

    public function petugas ()
    {
        return $this->belongTos(petugas::class, 'petugas_id');
    }
}
