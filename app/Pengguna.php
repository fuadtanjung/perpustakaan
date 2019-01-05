<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{

    protected $fillable = [
        'no_member','nik', 'nama', 'alamat','nohp','email','file'
    ];

    
  /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function peminjamans()
    {
        return $this->hasMany(\App\Models\Peminjaman::class);
    }

    protected $primaryKey = 'no_member';
}
