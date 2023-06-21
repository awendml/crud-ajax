<?php

namespace Database\Seeders;

use App\Models\Balanja;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i <= 10 ; $i++) { 
            Balanja::create([
                'name' => $faker.commerce.product(),
                'price' => $faker.commerce.price(min: 100000, max: 500000),
                'description' => $faker.commerce.productDescription(),

            ]);
        }
        
    }
}