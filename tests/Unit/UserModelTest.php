<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserModelTest extends TestCase
{
    use RefreshDatabase;
  
    public function it_can_create_a_user()
    {
        $user = User::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => bcrypt('password123'),
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'john.doe@example.com',
        ]);

        $this->assertEquals('John Doe', $user->name);
    }

    public function it_can_update_a_user()
    {
        $user = User::factory()->create([
            'name' => 'Jane Doe',
        ]);

        $user->name = 'Jane Smith';
        $user->save();

        $this->assertDatabaseHas('users', [
            'email' => $user->email,
            'name' => 'Jane Smith',
        ]);
    }

    public function it_can_delete_a_user()
    {
        $user = User::factory()->create();

        $userId = $user->id;
        $user->delete();

        $this->assertDeleted('users', [
            'id' => $userId,
        ]);
    }

    public function it_requires_a_name()
    {
        $this->expectException(\Illuminate\Database\QueryException::class);

        User::create([
            'email' => 'no.name@example.com',
            'password' => bcrypt('password123'),
        ]);
    }

    public function it_requires_a_valid_email()
    {
        $this->expectException(\Illuminate\Database\QueryException::class);

        User::create([
            'name' => 'No Email',
            'email' => 'not-an-email',
            'password' => bcrypt('password123'),
        ]);
    }

    public function it_requires_a_password()
    {
        $this->expectException(\Illuminate\Database\QueryException::class);

        User::create([
            'name' => 'No Password',
            'email' => 'no.password@example.com',
        ]);
    }
}
