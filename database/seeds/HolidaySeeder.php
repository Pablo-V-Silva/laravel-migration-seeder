<?php

use Illuminate\Database\Seeder;
use App\Models\Holiday;
use Faker\Generator as Faker;

class HolidaySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(Faker $faker)
  {
    for ($i = 0; $i < 32; $i++) {
      # code...
      $_holidays = new Holiday();
      $_holidays->to = $faker->word();
      $_holidays->from = $faker->word();
      $_holidays->start_date = $faker->date();
      $_holidays->end_date = $faker->date();
      $_holidays->price = $faker->numberBetween(1000, 10000);
      $_holidays->save();
    }
  }
}
