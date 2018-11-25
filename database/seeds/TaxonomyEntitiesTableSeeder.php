<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TaxonomyEntitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('taxonomy_entities')->insert([
            [
            	'taxonomy_entity_name' => 'tech',
                'taxonomy_types_fk' => 1,
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            	'taxonomy_entity_name' => 'business',
                'taxonomy_types_fk' => 1,
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            	'taxonomy_entity_name' => 'cars',
                'taxonomy_types_fk' => 2,
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
