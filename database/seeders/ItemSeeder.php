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

        $items = config('items');

        foreach ($items as $item) {

            $new_item = new Item();
            $new_item->name = $item['name'];
            $new_item->description = $item['description'];
            $new_item->price = $item['price'];

            $new_item->save();
        }
    }
}
