<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountriesTableSeeder::class);
        // $this->call(CitiesTableSeeder::class);
        $this->call(Languages::class);
        $this->call(RoleSeeder::class);
        $this->call(StatesInTableSeeder::class);
        $this->call(TimezoneSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategoryPostSeeder::class);



    }
}
