<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Family;
use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $families = [
            'Suplementos Deportivos' => [
                'Proteínas' => [
                    'Whey Protein',
                    'Caseína',
                    'Proteína vegetal',
                    'Ganadores de masa',
                ],
                'Aminoácidos' => [
                    'BCAA',
                    'EAA',
                    'Glutamina',
                    'Arginina',
                ],
                'Pre-entrenos' => [
                    'Con cafeína',
                    'Sin cafeína',
                    'Óxido nítrico',
                ],
                'Creatinas' => [
                    'Monohidratada',
                    'Micronizada',
                    'Kre-Alkalyn',
                ],
            ],
            'Vitaminas y Salud' => [
                'Vitaminas' => [
                    'Multivitamínicos',
                    'Vitamina C',
                    'Vitamina D',
                    'Vitamina B12',
                ],
                'Minerales' => [
                    'Zinc',
                    'Magnesio',
                    'Calcio',
                ],
                'Ácidos grasos' => [
                    'Omega 3',
                    'Omega 6',
                    'Omega 9',
                ],
            ],
            'Accesorios de Entrenamiento' => [
                'Hidratación' => [
                    'Shakers',
                    'Botellas deportivas',
                ],
                'Soporte y protección' => [
                    'Cinturones de levantamiento',
                    'Muñequeras',
                    'Rodilleras',
                    'Guantes',
                ],
                'Bandas y cuerdas' => [
                    'Bandas de resistencia',
                    'Sogas para saltar',
                ],
            ],
            'Ropa Deportiva' => [
                'Parte superior' => [
                    'Camisetas',
                    'Tops deportivos',
                    'Sudaderas',
                ],
                'Parte inferior' => [
                    'Shorts',
                    'Leggings',
                    'Joggers',
                ],
                'Accesorios' => [
                    'Gorras',
                    'Toallas',
                    'Calcetas deportivas',
                ],
            ],
        ];

        foreach ($families as $family => $categories) {

            $family = Family::create([
                'name'=> $family,
            ]);

            foreach ($categories as  $categoy => $subcategories) {

                $category = Category::create([
                    'name' => $categoy,
                    'family_id' => $family->id,
                ]);

                foreach ($subcategories as $subcategory) {
                    Subcategory::create([
                        'name'=> $subcategory,
                        'category_id' => $category->id,
                    ]);
                }
            }
        }
    }

}
