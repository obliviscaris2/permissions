<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create(['name' => 'Koshi Province']);
        State::create(['name' => 'Madhesh Province']);
        State::create(['name' => 'Bagmati Province']);
        State::create(['name' => 'Gandaki Province']);
        State::create(['name' => 'Lumbini Province']);
        State::create(['name' => 'Karnali Province']);
        State::create(['name' => 'Sudurpaschim Province']);
    }
}
