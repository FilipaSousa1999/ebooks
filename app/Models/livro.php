<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\video;
use App\Models\capa;
use App\Models\audio;
use App\Models\ilustracoes;
use App\Models\pdf;

class livro extends Model
{
    protected $table = 'livros';
    public $timestamps = false;
    use HasFactory;
    public function autores(){
        return $this->belongsToMany(autor::class);
    }
    public function pdf(){
        return $this->hasOne(pdf::class);
    }

    public function capa(){
        return $this->hasOne(capa::class);
    }

    public function video(){
        return $this->hasOne(video::class);
    }

    public function audio(){
        return $this->hasOne(audio::class);
    }

    public function ilustracoes(){
        return $this->hasMany(ilustracoes::class);
    }
}
