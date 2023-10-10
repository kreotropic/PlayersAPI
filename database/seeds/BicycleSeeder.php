<?php

use Illuminate\Database\Seeder;
use App\Bicycle;

class BicycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Bicycle::class, 10)->create();
    }
}
