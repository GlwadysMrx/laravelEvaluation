<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('locations')->insert([
        [
          "name"=> "Villeurbanne",
        ],
        [
          "name"=> "Lyon 69002",
        ],
        [
          "name"=> "Lyon 69003",
        ],
      ]);
    }
}
