<?php

use Illuminate\Database\Seeder;
use App\Tickets;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=\Faker\Factory::create();
        for($i=0;$i<15;$i++)
        {
        $ticket= new Tickets();
        $ticket->title=$faker->name;

        $ticket->content=$faker->text(200);
        $ticket->save();
        }
    }
}
