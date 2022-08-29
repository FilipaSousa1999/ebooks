<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apoios extends Model
{
    protected $table = 'apoios';
    use HasFactory;
    use HasFactory;
    public function livros(){
        return $this->belongsToMany(livro::class);
}
}