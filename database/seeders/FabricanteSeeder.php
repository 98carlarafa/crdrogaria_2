<?php

namespace Database\Seeders;

use App\Models\Fabricante;
use Illuminate\Database\Seeder;

class FabricanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fabricante::create(['nome' => 'Momenta', 'cnpj' => '12345678998123', 'telefone' => '999734563', 'pais' => 'Brasil', 'cidade' => 'Pirapora']);
        Fabricante::create(['nome' => 'Cimed', 'cnpj' => '89987654321578', 'telefone' => '988712343', 'pais' => 'França', 'cidade' => 'Paris']);
        Fabricante::create(['nome' => 'Sanofi Aventis', 'cnpj' => '13456789234379', 'telefone' => '997651234', 'pais' => 'Argentina', 'cidade' => 'Buenos Aires']);

    }
}
