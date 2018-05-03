<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*
     * executando o seed
     * php artisan db:seed
     */
    public function run()
    {
        \DB::statement('truncate pages');
        factory(App\Page::class, 100)->create();
    }
}
