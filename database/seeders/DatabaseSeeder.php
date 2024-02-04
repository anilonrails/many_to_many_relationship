<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Food;
use App\Models\Order;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // \App\Models\User::factory(2)->create();
       // Food::factory(100)->create();
       // Order::factory(1000)->create();

        $orders = Order::all();
        foreach ($orders as $order) {

            $randomQuantity = rand(1, 10);

            $randomFoods = Food::inRandomOrder()->limit($randomQuantity)->get();

            foreach ($randomFoods as $food) {
                $order->foods()->attach($food, ['quantity' => rand(1, 10)]);
            }
        }
    }
}
