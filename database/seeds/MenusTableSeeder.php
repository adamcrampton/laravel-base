<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add default menus.
        DB::table('menus')->insert([
            [
                'menu_nice_name' => 'Manage Menu',
                'menu_name' => 'manage-menu',
                'menu_items' => serialize([
                    'manage.index' => 'Manage'
                ]),
                'menu_order' => serialize([
                    1 => 'Manage'
                ])
            ],
            [
                'menu_nice_name' => 'Public Menu',
                'menu_name' => 'public-menu',
                'menu_items' => serialize([
                    'manage.index' => 'Admin Home',
                    'manage.page.index' => 'Pages',
                    'manage.option.index' => 'Options',
                    'logout' => 'Log out'
                ]),
                'menu_order' => serialize([
                    1 => 'Admin Home',
                    2 => 'Pages',
                    3 => 'Options',
                    4 => 'Log Out'
                ])
            ]
        ]);
    }
}