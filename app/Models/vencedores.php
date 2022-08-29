<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vencedores extends Model
{
    protected $table = 'vencedor';
    public $timestamps = false;
    use HasFactory;
    public function livros(){
        return $this->belongsToMany(livro::class);
}
}