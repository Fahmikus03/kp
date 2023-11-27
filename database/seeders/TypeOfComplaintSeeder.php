<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type_of_complaint;

class Type_if_complaint extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type_of_complaint::create([
            'name_type_of_complaint' => 'KTP'
        ]);

        Type_of_complaint::create([
            'name_type_of_complaint' => 'Kartu Keluarga'
        ]);

        Type_of_complaint::create([
            'name_type_of_complaint' => 'Akte Kelahiran'
        ]);
    }
}
