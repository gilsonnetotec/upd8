<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Customer;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        Customer::create([
            'nome' => 'João Vasconselo',
            'cpf' => '12345678900',
            'data_nascimento' => '1990-01-01',
            'estado' => 'SP',
            'cidade' => 'Guarulhos',
            'sexo' => 'Masculino',
        ]);

        // Adicione mais registros se necessário
    }
}
