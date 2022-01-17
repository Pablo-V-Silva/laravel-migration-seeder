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
      $_holiday = new Holiday();
      $_holiday->to = $faker->word();
      $_holiday->from = $faker->word();
      $_holiday->start_date = $faker->date();
      $_holiday->end_date = $faker->date();
      $_holiday->price = $faker->numberBetween(1000, 10000);
      $_holiday->save();
    }
  }
}
