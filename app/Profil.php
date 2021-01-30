<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    public function pertanyaan()
    {
        return $this->hasMany('App\Pertanyaan');
    }

    public function jawaban()
    {
        return $this->hasMany('App\Jawaban');
    }

    public function komentar_pertanyaan()
    {
        return $this->hasMany('App\KomentarPertanyaan');
    }

    public function komentar_jawaban()
    {
        return $this->hasMany('App\KomentarJawaban');
    }

    public function like_dislike_pertanyaan()
    {
        return $this->hasMany('App\LikeDislikePertanyaan');
    }

    public function like_dislike_jawaban()
    {
        return $this->hasMany('App\LikeDislikeJawaban');
    }
}
