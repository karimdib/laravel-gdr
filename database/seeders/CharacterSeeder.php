<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Character;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 5; $i++) {
            $new_character = new Character();
            $new_character->name = $faker->name();
            $new_character->bio = $faker->text();
            $new_character->defense = $faker->randomNumber(2, false);
            $new_character->speed = $faker->randomNumber(2, false);
            $new_character->hp = $faker->randomNumber(4, false);
            $new_character->attack = $faker->randomNumber(2, false);
            $new_character->save();
        }
    }
}


// $table->id();
// $table->string('name');
// $table->text('bio');
// $table->unsignedTinyInteger('defense');
// $table->unsignedTinyInteger('speed');
// $table->unsignedSmallInteger('hp');
// $table->timestamps();