<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'title' => 'Event 1',
                'description' => 'Deskripsi Event 1',
                'date' => '2025-04-20',
                'location' => 'Bandung',
                'image' => 'https://plus.unsplash.com/premium_photo-1663045893961-535354f273b9?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Event 2',
                'description' => 'Deskripsi Event 2',
                'date' => '2025-04-22',
                'location' => 'Surabaya',
                'image' => 'https://images.unsplash.com/photo-1724210434208-9093f66e4b3f?q=80&w=1529&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Event 3',
                'description' => 'Deskripsi Event 3',
                'date' => '2025-04-22',
                'location' => 'Surabaya',
                'image' => 'https://images.unsplash.com/photo-1585652757141-8837d676fac8?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Event 4',
                'description' => 'Deskripsi Event 4',
                'date' => '2025-04-22',
                'location' => 'Surabaya',
                'image' => 'https://images.unsplash.com/photo-1585652757141-8837d676fac8?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
