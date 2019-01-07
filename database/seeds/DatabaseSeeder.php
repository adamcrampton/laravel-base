<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MenusTableSeeder::class);
        $this->call(OptionsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(TaxonomyEntitiesTableSeeder::class);
        $this->call(TaxonomyLinksTableSeeder::class);
        $this->call(TaxonomyTypesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
