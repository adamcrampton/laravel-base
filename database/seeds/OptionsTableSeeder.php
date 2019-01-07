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
                'uri' => 'site-admin-email',
                'option_nice_name' => 'Site Admin Email',
                'option_name' => 'global_email',
                'option_value' => 'admin@site.com',
                'option_data_type' => 'string',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'uri' => 'post-loop-limit',
                'option_nice_name' => 'Post Loop Limit',
                'option_name' => 'post_loop_limit',
                'option_value' => 10,
                'option_data_type' => 'integer',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'uri' => 'post-status-types',
                'option_nice_name' => 'Page Status Types',
                'option_name' => 'page_status_types',
                'option_value' => serialize(['published', 'draft', 'trash']),
                'option_data_type' => 'serialized',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'uri' => 'manage-pagination',
                'option_nice_name' => 'Manage Section Pagination',
                'option_name' => 'manage_pagination',
                'option_value' => 10,
                'option_data_type' => 'integer',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'uri' => 'public-pagination',
                'option_nice_name' => 'Public Site Pagination',
                'option_name' => 'public_pagination',
                'option_value' => 10,
                'option_data_type' => 'integer',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]   
        ]);
    }
}
