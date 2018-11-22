<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{

    protected $fillable = [
        'nik', 'nama', 'alamat','nohp','email','foto'
    ];

    
  /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function peminjamans()
    {
        return $this->hasMany(\App\Models\Peminjaman::class);
    }

    protected $primaryKey = 'nik';
}
