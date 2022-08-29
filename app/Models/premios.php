<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class premios extends Model
{
    protected $table = 'premios';
    public $timestamps = false;

    use HasFactory;
    public function livros(){
        return $this->belongsToMany(livro::class);
    }
}
