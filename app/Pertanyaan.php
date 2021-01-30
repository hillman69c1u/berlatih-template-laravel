<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    public function profil()
    {
        return $this->belongsTo('App\Profil');
    }

    public function jawaban()
    {
        return $this->hasMany('App\Jawaban');
    }

    public function komentar_pertanyaan()
    {
        return $this->hasMany('App\KomentarPertanyaan');
    }

    public function like_dislike_pertanyaan()
    {
        return $this->hasMany('App\LikeDislikePertanyaan');
    }

}
