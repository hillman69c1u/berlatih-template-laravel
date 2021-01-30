<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KomentarPertanyaan extends Model
{
    public function profil()
    {
        return $this->belongsTo('App\Profil');
    }

    public function pertanyaan()
    {
        return $this->belongsTo('App\Pertanyaan');
    }
}
