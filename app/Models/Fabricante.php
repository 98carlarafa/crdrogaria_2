<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    use HasFactory;

    protected $table = "fabricantes";

    protected $fillable = ['nome', 'cnpj', 'telefone', 'pais', 'cidade', 'descricao'];

    public function medicamento(){
        return $this->hasMany(Medicamento::class);
    }
}
