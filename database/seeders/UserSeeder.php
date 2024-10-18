<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Primer usuario
        $user1 = new User();
        $user1->name = 'Pedro';
        $user1->email = 'pedro@gmail.com';
        $user1->password = bcrypt('123456789');
        $user1->save();

        // Segundo usuario
        $user2 = new User();
        $user2->name = 'Maria';
        $user2->email = 'maria@gmail.com';
        $user2->password = bcrypt('987654321');
        $user2->save();

        
    }
}
