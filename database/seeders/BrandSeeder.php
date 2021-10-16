<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<=10; $i++) {
            \App\Models\Brand::create([
                'name' => 'Brand-'.$i,
                'slug' => 'brand-'.$i,
                'image' => 'image 1',
                'description' => 'Description 1',
                'is_active' => true,
                'is_featured' => true,
                'order' => $i,
                'view_count' => 0,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }

        
    }
}
