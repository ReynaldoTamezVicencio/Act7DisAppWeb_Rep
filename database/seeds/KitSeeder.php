<?php

use Illuminate\Database\Seeder;
use App\Kit;

class KitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kit::create(['nombre' => 'StarterKit']);
        Kit::create(['nombre' => 'Educational Robotics Kit']);
        Kit::create(['nombre' => 'Kit5']);
    }
}
