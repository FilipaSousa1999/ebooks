<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\livro;

class audio extends Model
{
    protected $table = 'audio';
    public $timestamps = false;
    use HasFactory;

    public function livro(){
        return $this->belongsTo(livro::class);
    }
}
