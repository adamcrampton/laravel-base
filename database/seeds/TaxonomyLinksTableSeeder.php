<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TaxonomyLinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set up example taxonomy linkages.
        DB::table('taxonomy_links')->insert([
            [
            	'pages_fk' => 1,
                'taxonomy_entities_fk' => 1,
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            	'pages_fk' => 2,
                'taxonomy_entities_fk' => 1,
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            	'pages_fk' => 3,
                'taxonomy_entities_fk' => 1,
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
