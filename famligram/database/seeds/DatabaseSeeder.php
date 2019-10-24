<?php

use App\Post;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $people = ['jon', 'james', 'rupert', 'kamren', 'danni'];

        collect($people)->each(function ($person) {
            $familyMember = factory(User::class)->create([
                'name' => $person,
                'email' => "{$person}@example.com",
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]);

            factory(Post::class, rand(2,10))->create([
                'user_id' => $familyMember->id,
            ]);
        });


    }


}
