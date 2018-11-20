<?php

use Illuminate\Database\Seeder;
use App\Models\Action;

class ActionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Action::create(['name' => 'click']);
        Action::create(['name' => 'view']);
        Action::create(['name' => 'search']);
    }
}
