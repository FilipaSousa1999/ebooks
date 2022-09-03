<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\livro;

class capa extends Model
{
    protected $table = 'capa';
    use HasFactory;
    public $timestamps = false;
    
    public function livro(){
        return $this->belongsTo(livro::class);
    }    

}
