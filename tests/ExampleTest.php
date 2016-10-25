<?php

use App\Post;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    // public function testBasicExample()
    // {
    //     $this->visit('/')
    //         ->type('some query', '#search')
    //         ->press('Search')
    //         ->see('Search results for "some query"');
    // }

    // public function testBasicExample2()
    // {
    //     $post = factory(Post::class)->create();

    //     $this->visit('posts')
    //         ->see($post->title);
    // }

    public function testAdminOnly()
    {
        $pat = factory('App\User')->create(['name' => 'PatriqueOuimet']);

        $this->actingAs($pat)
            ->visit('admin')
            ->see('Hello Patrique');
    }
}
