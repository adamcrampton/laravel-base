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
        $this->call(CategoriesTableSeeder::class);
        $this->call(OptionsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(TaxonomyLinksTableSeeder::class);
        $this->call(UserPermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
