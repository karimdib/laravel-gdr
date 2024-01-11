<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'name' => 'Potion of Healing',
                'description' => 'A magical potion that restores health when consumed.',
                'price' => 50.0,
            ],
            [
                'name' => 'Scroll of Fireball',
                'description' => 'A scroll containing the Fireball spell, unleashes fiery destruction.',
                'price' => 75.0,
            ],
            [
                'name' => 'Dagger +1',
                'description' => 'A finely crafted dagger with a magical enchantment for improved damage.',
                'price' => 100.0,
            ],
            [
                'name' => 'Ring of Invisibility',
                'description' => 'A mystical ring that grants the wearer the ability to become invisible at will.',
                'price' => 200.0,
            ],
            [
                'name' => 'Wand of Lightning Bolts',
                'description' => 'A wand that can unleash powerful bolts of lightning upon command.',
                'price' => 150.0,
            ],

        ];

        foreach ($items as $item) {
            $new_item = new Item();
            
        }
    }
}
