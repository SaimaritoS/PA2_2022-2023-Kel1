<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RolesSeeder::class);
        $this->call(AdminSeeder::class);
        // $this->call(KategorySeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(KecamatanSeeder::class);
        // $this->call(PapanBungaSeeder::class);
        // $this->call(BouquetSeeder::class);
        // $this->call(ProductsSeeder::class);

    }
}
