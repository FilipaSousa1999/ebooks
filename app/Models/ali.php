<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ali extends Model
{
    protected $table = 'ali';
    public $timestamps = false;
    use HasFactory;
    public function livros(){
        return $this->belongsToMany(livro::class);
    }
}
