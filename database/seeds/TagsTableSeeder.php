<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set up example tags.
        DB::table('tags')->insert([
            [
            	'tag_name' => 'Example Tag 1',
            	'tag_uri' => 'example-tag-1',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            	'tag_name' => 'Example Tag 2',
            	'tag_uri' => 'example-tag-2',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            	'tag_name' => 'Example Tag 3',
            	'tag_uri' => 'example-tag-3',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
