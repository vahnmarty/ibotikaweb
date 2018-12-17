<?php

use Illuminate\Database\Seeder;
use App\Models\Webhook;

class WebhookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Webhook::create([
        	'token' => '123',
        	'secret' => '123',
        	'is_valid' => true,
        ]);
    }
}
