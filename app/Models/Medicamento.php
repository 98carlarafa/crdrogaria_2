<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;

    protected $table = "medicamentos";

    protected $fillable = ['nome', 'peso', 'quantidade', 'marca', 'fabricante_id', 'valor'];

    public function fabricante(){
        return $this->belongsTo(Fabricante::class);
    }
}
