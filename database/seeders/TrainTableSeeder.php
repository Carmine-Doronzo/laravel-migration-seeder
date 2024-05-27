<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
class TrainTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        DB::table('trains')->truncate();
        $aziende = ['Deutsche Bahn','Frecciargento','Frecciabianca','Intercity','Intercity Notte','Frecciarossa 1000','Eurocity','Bernina Express'];
        for($i =0; $i < 10; $i++){
            $train = new Train();

            $train->azienda = $faker->randomElement($aziende);
            do {
                $train->stazione_di_partenza = $faker->city();
                $train->stazione_di_arrivo = $faker->city();
            } while ($train->stazione_di_partenza === $train->stazione_di_arrivo);
           
            //do {
                $train->orario_di_partenza = $faker->dateTimeInInterval('-1 day');
                $train->orario_di_arrivo = $faker->dateTimeInInterval('+1 day');
            //} while ($train->orario_di_arrivo < $train->orario_di_partenza);
            //dump(date_create());
            $train->codice_treno = $faker->bothify('####');
            $train->numero_carrozze = $faker->numberBetween(0,12);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();

            $train->save();

        }
    }
}
