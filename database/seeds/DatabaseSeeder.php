<?php

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        collect(['jon', 'james', 'rupert', 'kamren', 'danni'])->map(function ($familyMemberName) {

            return $this->addFamilyMember($familyMemberName);

        })->map(function (User $familyMember) {

            return $this->addPostsForFamilyMember($familyMember);

        })->flatten()->map(function (Post $post) {

            return $this->addCommentsToPost($post);

        })->flatten()->each(function (Comment $comment){



        });
    }

    protected function addFamilyMember(string $familyMemberName): User
    {
        return factory(User::class)->create([
            'name' => $familyMemberName,
            'email' => "{$familyMemberName}@example.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
    }

    protected function addPostsForFamilyMember(User $familyMember): Collection
    {
        return factory(Post::class, rand(2, 10))->create([
            'user_id' => $familyMember->id,
        ]);
    }

    protected function addCommentsToPost(Post $post): Collection
    {
        $comments = [];
        for ($comment = 1; $comment <= rand(0, 6); $comment++) {
            $userId = User::all()->pluck('id')->random();
            $comments[] = factory(Comment::class)->create([
                'user_id' => $userId,
                'post_id' => $post->id
            ]);
        }

        return collect($comments);
    }
}
