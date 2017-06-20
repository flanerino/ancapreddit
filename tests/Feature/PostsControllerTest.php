<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostsControllerTest extends TestCase
{
  use DatabaseMigrations;

  /** @test */
  public function a_guest_can_see_all_posts()
  {
    // Arrange
    $posts = factory(\App\Post::class,10)->create();

    //Act
    $response = $this->get(route('posts_path'));

    //Assert

    $response->assertStatus(200);
    foreach ($posts as $post)
    {
      $response->assertSee($post->title);
    }
  }

  /** @test */
  public function a_registered_user_can_see_all_posts()
  {
    // Arrange
    $user = factory(\App\User::class)->create();

    $this->userSignIn($user);

    $posts = factory(\App\Post::class,10)->create();

    //Act
    $response = $this->get(route('posts_path'));

    //Assert

    $response->assertStatus(200);
    foreach ($posts as $post) {
      $response->assertSee($post->title);
    }
  }
}
