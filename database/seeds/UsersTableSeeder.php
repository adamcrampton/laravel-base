<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Set up default admin user.
        DB::table('users')->insert([
            [
                'first_name' => 'Test',
                'last_name' => 'User 1',
                'name' => 'Test User 1',
                'username' => 'test-user-1',
                'email' => 'test1@laravel-base.test',
                'password' => Hash::make('test1'),
                'status' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'first_name' => 'Test',
                'last_name' => 'User 2',
                'name' => 'Test User 2',
                'username' => 'test-user-2',
                'email' => 'test2@laravel-base.test',
                'password' => Hash::make('test2'),
                'status' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'first_name' => 'Test',
                'last_name' => 'User 3',
                'name' => 'Test User 3',
                'username' => 'test-user-3',
                'email' => 'test3@laravel-base.test',
                'password' => Hash::make('test3'),
                'status' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'first_name' => 'Test',
                'last_name' => 'User 4',
                'name' => 'Test User 4',
                'username' => 'test-user-4',
                'email' => 'test4@laravel-base.test',
                'password' => Hash::make('test4'),
                'status' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);

        // Add roles to sample users.
        $users = User::all();
        $users->each(function($user, $key) {
            switch ($user->id) {
                case 1:
                    $user->assignRole('administrator');
                    break;
                case 2:
                    $user->assignRole('editor');
                    break;
                default:
                    $user->assignRole('viewer');
                    break;
            }
        });
    }
}
