<?php

use Illuminate\Database\Seeder;
use App\Dinosaurino;
class DinosauriniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Dinosaurino::class, 50) -> create();
    }
}
