<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add default config.
        DB::table('options')->insert([
            [
                'option_nice_name' => 'Site Admin Email',
                'option_name' => 'global_email',
                'option_value' => 'admin@site.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'option_nice_name' => 'Post Loop Limit',
                'option_name' => 'post_loop_limit',
                'option_value' => 10,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'option_nice_name' => 'Public Menu Items',
                'option_name' => 'public_menu_items',
                'option_value' => serialize(['Manage' => 'manage.index']),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'option_nice_name' => 'Manage Menu Items',
                'option_name' => 'manage_menu_items',
                'option_value' => serialize([
                    'Admin Home' => 'manage.index',
                    'Pages' => 'page.index',
                    'Options' => 'option.index',
                    ]),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
