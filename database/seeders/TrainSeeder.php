<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trains;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //RESET TAB
        DB::table('trains')->truncate();

        $departure_stations = ['Milano Porta Garibaldi', 'Milano Centrale', 'Milano Domodossola'];
        $arrival_stations = ['Seregno', 'Monza', 'Milano Domodossola'];

        for ($i = 0; $i < 100; $i++){

            //creo istanza di train
            $new_train = new Trains();

            $new_train->company = $faker->randomElement(['Italo','Frecciarossa','Trenitalia']);
            $new_train->departure_station = $faker->randomElement($departure_stations);
            $new_train->arrival_station = $faker->randomElement($arrival_stations);
            $new_train->departure_time = $faker->dateTimeBetween('-1 hour', '+1 hour');
            $new_train->arrival_time = $faker->dateTimeBetween($new_train->departure_time, '+5 hour');
            $new_train->train_code = $faker->unique()->numerify();
            $new_train->carriages_number = $faker->randomDigitNotNull();
            $new_train->in_time = $faker->randomElement([true, false]);
            $new_train->cancelled = $faker->randomElement([true, false]);

            $new_train->save();
        }
    }
}
