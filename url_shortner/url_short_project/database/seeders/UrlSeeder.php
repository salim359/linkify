<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Url;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UrlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=User::factory()->create();
        Url::factory(10)->create([
            'user_id' => 1
        ]);
    }
}
