<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livro extends Model
{
    protected $table = 'livros';
    public $timestamps = false;
    use HasFactory;
    public function autores(){
        return $this->belongsToMany(autor::class);
    }
}
