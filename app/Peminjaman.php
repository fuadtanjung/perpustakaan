<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
        protected $fillable = [
        'status',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function penggunas()
    {
        return $this->belongsToMany(\App\Models\User::class, 'Pengguna');
    }    

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function bukus()
    {
        return $this->belongsToMany(\App\Models\User::class, 'Buku');
    }    

}
