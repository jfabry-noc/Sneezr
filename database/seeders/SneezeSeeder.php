<?php

namespace Database\Seeders;

use App\Models\Sneeze;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SneezeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sneeze::create([
            'longitude' => -119.552910,
            'latitude' => 49.881222,
            'count' => 2,
            'is_outdoors' => false,
        ]);

        Sneeze::create([
            'longitude' => -79.995888,
            'latitude' => 40.440624,
            'count' => 3,
            'is_outdoors' => true,
        ]);

        Sneeze::create([
            'longitude' => -81.379234,
            'latitude' => 28.538336,
            'count' => 1,
            'is_outdoors' => true,
        ]);

        Sneeze::create([
            'count' => 3,
        ]);

        Sneeze::create([
            'count' => 2,
            'is_outdoors' => false,
        ]);
    }
}
