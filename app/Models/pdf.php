<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\livro;

class pdf extends Model
{
    protected $table = 'pdf';
    use HasFactory;
    
    public function livro(){
        return $this->belongsTo(livro::class);
    }
}
