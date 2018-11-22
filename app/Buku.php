<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{	
    protected $fillable = [
       'judul', 'pengarang','penerbit','jenis','lokasi',
    ];   


  	/**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function peminjamans()
    {
        return $this->hasMany(\App\Models\Peminjaman::class);
    }    
    
}
