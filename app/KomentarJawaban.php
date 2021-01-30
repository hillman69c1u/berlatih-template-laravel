<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KomentarJawaban extends Model
{
    public function profil()
    {
        return $this->belongsTo('App\Profil');
    }

    public function jawaban()
    {
        return $this->belongsTo('App\Jawaban');
    }
}
