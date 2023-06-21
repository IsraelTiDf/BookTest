<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categorias = [
            ['descricao' => 'Tv/Monitores'],
            ['descricao' => 'PC'],
            ['descricao' => 'Jogos/Console'],
            ['descricao' => 'Smartphone'],
        ];

        DB::table('categoria')->insert($categorias);
    }
}
