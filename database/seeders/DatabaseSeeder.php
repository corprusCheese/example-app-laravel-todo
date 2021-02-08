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
        // так делать не надо
        //(new UserSeeder())->run();
        //(new RecordSeeder())->run();

        // так вызывать
        // php artisan db:seed --class=DatabaseSeeder

        // переписать всю базу
        // php artisan migrate:fresh --seed

        $this->call([
            UserSeeder::class,
            RecordSeeder::class
        ]);
    }
}
