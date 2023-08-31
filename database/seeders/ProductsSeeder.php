<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::create([
            'name' => 'Prodotto 1',
            'description' => 'Descrizione del Prodotto 1',
        ]);

        Products::create([
            'name' => 'Prodotto 2',
            'description' => 'Descrizione del Prodotto 2',
        ]);
        Products::create([
            'name' => 'Prodotto 3',
            'description' => 'Descrizione del Prodotto 3',
        ]);

        Products::create([
            'name' => 'Prodotto 4',
            'description' => 'Descrizione del Prodotto 4',
        ]);   
        Products::create([
            'name' => 'Prodotto 5',
            'description' => 'Descrizione del Prodotto 5',
        ]);

        Products::create([
            'name' => 'Prodotto 6',
            'description' => 'Descrizione del Prodotto 6',
        ]);
        Products::create([
            'name' => 'Prodotto 7',
            'description' => 'Descrizione del Prodotto 7',
        ]);

        Products::create([
            'name' => 'Prodotto 8',
            'description' => 'Descrizione del Prodotto 8',
        ]);
        Products::create([
            'name' => 'Prodotto 9',
            'description' => 'Descrizione del Prodotto 9',
        ]);

        Products::create([
            'name' => 'Prodotto 10',
            'description' => 'Descrizione del Prodotto 10',
        ]);
}
}
