<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
          [
            "name" => "Transbordeur",
            "location_id" => "1",
            "status_id" => "1",
          ],
          [
            "name" => "Marché Gare",
            "location_id" => "2",
            "status_id" => "1",
          ],
          [
            "name" => "Auditorium",
            "location_id" => "3",
            "status_id" => "1",
          ],
        ]);
    }
}
