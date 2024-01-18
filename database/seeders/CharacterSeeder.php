<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Character;
use App\Models\Type;
use App\Models\Item;


class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 5; $i++) {
            $new_character = new Character();
            $new_character->name = $faker->name();
            $new_character->bio = $faker->text();
            $new_character->hp = $faker->randomNumber(4, false);
            $new_character->attack = $faker->randomNumber(2, false);
            $new_character->defense = $faker->randomNumber(2, false);
            $new_character->speed = $faker->randomNumber(2, false);
            $new_character->type_id = Type::all()->random()->id;
            $new_character->save();
            $new_character->items()->attach(Item::all()->random(5));
        }
    }
}
