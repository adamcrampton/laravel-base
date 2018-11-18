<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set up example pages.
        DB::table('pages')->insert([
            [
            	'title' => 'Example Page 1',
            	'uri' => 'example-page-1',
                'content' => '<p>Some example HTML content</p>',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Example Page 2',
                'uri' => 'example-page-2',
                'content' => '<p>Some more example HTML content</p>',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Example Page 3',
                'uri' => 'example-page-3',
                'content' => '<p>Even example HTML content</p>',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
