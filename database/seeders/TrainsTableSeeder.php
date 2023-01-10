<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //     $table->string('azienda', 20);
        //      $table->string('tipo_treno', 20);
        //     $table->string('num_treno', 10);
        //     $table->string('staz_part', 50);
        //     $table->string('staz_arr', 50);
        //      $table->tinyInteger('num_cambi')->default(0);
        //     $table->tinyInteger('num_carrozze')->unsigned();
        //     $table->tinyInteger('in_orario')->default(1);
        //     $table->tinyInteger('cancellato')->default(0);
        //     $table->timestamps();
        for($i=0;$i<50;$i++){
            $new_train= new Train();
            $new_train->azienda=$faker->randomElement(['TrenItalia','Italo']);
            $new_train->tipo_treno=$faker->randomElement(['Frecciarossa','Frecciargento','Frecciabianca','Intercity', 'RV', 'Regionale']);
            $new_train->num_treno=$faker->unique()->regexify('[A-Z]{2}[0-9]{3}');
            $new_train->staz_part=$faker->city();
            $new_train->staz_arr=$faker->city();
            $new_train->num_cambi=$faker->optional($weight = 20, $default=0)->numberBetween(0,5);
            $new_train->num_carrozze=$faker->numberBetween(5,10);
            $new_train->in_orario=$faker->optional($weight = 40, $default=true)->boolean();
            $new_train->cancellato=$faker->optional($weight = 10, $default=false)->boolean();
            $new_train->save();

        }

    }
}
