<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class Ticket extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Ticket::create([
            'title' => Str::random(10),
            'author' => Str::random(15),
            'description' => Str::random(100),
            'is_open' => true,
        ]);
    }
}
