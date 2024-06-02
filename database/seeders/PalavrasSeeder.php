<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PalavrasSeeder extends Seeder {
    
    public function run(): void {
        DB::table('palavras')->insert([
            ['id' => 1, 'nome' => 'Luz',],
            ['id' => 2, 'nome' => 'Do mar',],
            ['id' => 3, 'nome' => 'De rádio',],
            ['id' => 4, 'nome' => 'Som',],
            ['id' => 5, 'nome' => 'Raio-x',],
            ['id' => 6, 'nome' => 'Micro-ondas',],
            ['id' => 7, 'nome' => 'Eletromagnéticas',],
            ['id' => 8, 'nome' => 'Mecânicas',],
            ['id' => 9, 'nome' => 'Pó estelar',],
            ['id' => 10, 'nome' => 'Areia',],
            ['id' => 11, 'nome' => 'Dióxido de Carbono',],
            ['id' => 12, 'nome' => 'Coloidais',],
            ['id' => 13, 'nome' => 'Corpúsculos',],
            ['id' => 14, 'nome' => 'Nitritos',],
            ['id' => 15, 'nome' => 'Glúons',],
            ['id' => 16, 'nome' => 'Massa',],
            ['id' => 17, 'nome' => 'Atrito',],
            ['id' => 18, 'nome' => 'Roldana',],
            ['id' => 19, 'nome' => 'Lançamento oblíquo',],
            ['id' => 20, 'nome' => 'Lançamento horizontal',],
            ['id' => 21, 'nome' => 'Força',],
            ['id' => 22, 'nome' => 'Energia',],
            ['id' => 23, 'nome' => 'Ciclo de Carnot',],
            ['id' => 24, 'nome' => 'Calor',],
            ['id' => 25, 'nome' => 'Temperatura',],
            ['id' => 26, 'nome' => 'Máquina Térmica',],
            ['id' => 27, 'nome' => 'Geladeira',],
            ['id' => 28, 'nome' => 'Trabalho',],
            ['id' => 29, 'nome' => 'Newton',],
            ['id' => 30, 'nome' => 'Einstein',],
            ['id' => 31, 'nome' => 'Stephen Hawking',],
            ['id' => 32, 'nome' => 'Planck',],
            ['id' => 33, 'nome' => 'Heisenberg',],
            ['id' => 34, 'nome' => 'Bohr',],
            ['id' => 35, 'nome' => 'Fermi',],
            ['id' => 36, 'nome' => 'Fahrenheit',],
            ['id' => 37, 'nome' => 'strlen',],
            ['id' => 38, 'nome' => 'trim',],
            ['id' => 39, 'nome' => '.split',],
            ['id' => 40, 'nome' => '.filter',],
            ['id' => 41, 'nome' => '.map',],
            ['id' => 42, 'nome' => '.join',],
            ['id' => 43, 'nome' => 'dd',],
            ['id' => 44, 'nome' => 'rand',],
            ['id' => 45, 'nome' => 'array_filter',],
            ['id' => 46, 'nome' => 'count',],
            ['id' => 47, 'nome' => '<div>',],
            ['id' => 48, 'nome' => '<p>',],
            ['id' => 49, 'nome' => '<span>',],
            ['id' => 50, 'nome' => '<b>',],
            ['id' => 51, 'nome' => 'background-color',],
            ['id' => 52, 'nome' => 'color',],
            ['id' => 53, 'nome' => 'width',],
            ['id' => 54, 'nome' => 'height',],
            ['id' => 55, 'nome' => 'Ácidos',],
            ['id' => 56, 'nome' => 'Bases',],
            ['id' => 57, 'nome' => 'Óxidos',],
            ['id' => 58, 'nome' => 'Sais',],
            ['id' => 59, 'nome' => 'Álcool',],
            ['id' => 60, 'nome' => 'Cetona',],
            ['id' => 61, 'nome' => 'Eter',],
            ['id' => 62, 'nome' => 'Fenol',],
            ['id' => 63, 'nome' => 'Amina',],
            ['id' => 64, 'nome' => '2-metil-pentano',],
            ['id' => 65, 'nome' => '3-metil-pentano',],
            ['id' => 66, 'nome' => 'H3C–CH2–CH2–CH3',],
            ['id' => 67, 'nome' => 'H3C–CH2–CH=CH–CH3',],
            ['id' => 68, 'nome' => 'H2C=CH2',],
            ['id' => 69, 'nome' => 'H3C–CH2–O–CH3',],
            ['id' => 70, 'nome' => '2-Metilbutano',],
            ['id' => 71, 'nome' => '2,2-Dimetilpropano',],
            ['id' => 72, 'nome' => '2,3-Dimetilpentano',],
            ['id' => 73, 'nome' => '3-Etil-2-metilhexano',],
        ]);
    }
}
