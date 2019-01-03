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
                'option_data_type' => 'string',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'option_nice_name' => 'Post Loop Limit',
                'option_name' => 'post_loop_limit',
                'option_value' => 10,
                'option_data_type' => 'integer',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'option_nice_name' => 'Page Status Types',
                'option_name' => 'page_status_types',
                'option_value' => serialize(['published', 'draft', 'trash']),
                'option_data_type' => 'serialized',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'option_nice_name' => 'Public Front End Menu Items',
                'option_name' => 'public_menu_items',
                'option_value' => serialize([
                    'manage.index' => 'Manage'
                ]),
                'option_data_type' => 'serialized',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'option_nice_name' => 'Manage Section Menu Items',
                'option_name' => 'manage_menu_items',
                'option_value' => serialize([
                    'manage.index' => 'Admin Home',
                    'manage.page.index' => 'Pages',
                    'manage.option.index' => 'Options',
                    'logout' => 'Log out'
                ]),
                'option_data_type' => 'serialized',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'option_nice_name' => 'Manage Section Pagination',
                'option_name' => 'manage_pagination',
                'option_value' => 10,
                'option_data_type' => 'integer',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]   
        ]);
    }
}
