<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $arrComics) {
            // metodo 1
            // $objHouse = new House();
            // $objHouse->reference = $arrHouse['reference'];
            // $objHouse->save()

            // metodo 2
            Comic::create($arrComics);
        }
    }
}