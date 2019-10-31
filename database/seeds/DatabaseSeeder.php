<?php

use App\Comment;
use App\Like;
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

            return $this->addPostsByFamilyMember($familyMember);

        })->flatten()->map(function (Post $post) {

            return $this->addCommentsToPost($post);

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

    protected function addPostsByFamilyMember(User $familyMember): Collection
    {
        $posts = factory(Post::class, rand(2, 10))->create([
            'user_id' => $familyMember->id,
        ])->each(function ($post){
            for ($familyMemberId = 1; $familyMemberId <= rand(0, 6); $familyMemberId++) {
                $post->likes()->save(
                    new Like([
                        'user_id' => $familyMemberId,
                        'likable_id' => $post->id,
                        'likable_type' => Post::class,
                    ])
                );
            }
        });

        return $posts;
    }

    protected function addCommentsToPost(Post $post): Collection
    {
        $comments = [];
        for ($comment = 1; $comment <= rand(0, 6); $comment++) {
            $userId = User::all()->pluck('id')->random();
            $comments[] = factory(Comment::class)->create([
                'user_id' => $userId,
                'post_id' => $post->id,
            ]);
        }

        return collect($comments);
    }
}
