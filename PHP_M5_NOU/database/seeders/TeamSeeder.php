<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Team1 = new Team();
        $Team1 -> name = 'Team One';
        $Team1 -> city = 'First City';
        $Team1 -> stadium = 'First Center';
        $Team1 -> color = 'Red';
        $Team1 -> save();
        
        $Team2 = new Team();
        $Team2 -> name = 'Team Two';
        $Team2 -> city = 'Second City';
        $Team2 -> stadium = 'Second Center';
        $Team2 -> color = 'Blue';
        $Team2 -> save();
        
        $Team3 = new Team();
        $Team3 -> name = 'Team Three';
        $Team3 -> city = 'Third City';
        $Team3 -> stadium = 'Third Center';
        $Team3 -> color = 'Yellow';
        $Team3 -> save();
        
        $Team4 = new Team();
        $Team4 -> name = 'Team Four';
        $Team4 -> city = 'Fourth City';
        $Team4 -> stadium = 'Fourth Center';
        $Team4 -> color = 'Green';
        $Team4 -> save();
    }
}
