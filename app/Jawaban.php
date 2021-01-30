<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    public function profil()
    {
        return $this->belongsTo('App\Profil');
    }

    public function pertanyaan()
    {
        return $this->belongsTo('App\Pertanyaan');
    }

    public function komentar_jawaban()
    {
        return $this->hasMany('App\KomentarJawaban');
    }

    public function like_dislike_jawaban()
    {
        return $this->hasMany('App\LikeDislikeJawaban');
    }
}
