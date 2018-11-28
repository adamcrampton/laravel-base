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
                'author_user_fk' => 3,
            	'uri' => 'example-page-1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'image_path' => 'http://placehold.it/750x300',
            	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Example Page 2',
                'author_user_fk' => 1,
                'uri' => 'example-page-2',
                'content' => 'Sed malesuada magna ex. Integer ac erat convallis, lobortis erat vitae, dictum felis. Nunc feugiat, justo vel venenatis faucibus, enim magna blandit est, ut molestie eros purus vitae velit. Aenean dapibus id metus finibus maximus. Nulla sodales quam quis sem dictum, et iaculis libero venenatis. Maecenas aliquam dui ut vestibulum fermentum. Ut viverra convallis leo ac aliquam. Suspendisse vel lacinia est. Vivamus nec dapibus nunc. Nulla convallis lectus at dui ornare malesuada. In hac habitasse platea dictumst. Ut magna est, dignissim at arcu quis, vehicula volutpat ex. Maecenas facilisis eget nisi at maximus. Nullam interdum feugiat auctor. Mauris quis dolor mauris. Curabitur id varius justo.',
                'excerpt' => 'Sed malesuada magna ex. Integer ac erat convallis, lobortis erat vitae, dictum felis. Nunc feugiat, justo vel venenatis faucibus, enim magna blandit est, ut molestie eros purus vitae velit.',
                'image_path' => 'http://placehold.it/750x300',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Example Page 3',
                'author_user_fk' => 4,
                'uri' => 'example-page-3',
                'content' => 'Pellentesque massa nibh, commodo ut magna vitae, laoreet suscipit mi. Integer imperdiet nec elit ac consequat. Morbi ut urna vel ante fermentum blandit. Integer tempus velit vitae mi auctor, eu iaculis lorem ornare. Nulla posuere ornare justo, vel pulvinar eros faucibus ac. In non sem rhoncus, dictum eros ut, vehicula metus. Phasellus non enim efficitur, convallis eros quis, mollis dui. Vivamus tempus sem vel ex tincidunt, vitae efficitur leo tristique. Donec non risus sit amet risus laoreet maximus et a justo. Nulla vel feugiat lacus. Ut porttitor maximus justo, viverra pretium sem consequat id. Nulla quis quam ac odio accumsan varius. Nam magna dolor, aliquet vitae tempor et, malesuada sit amet sem.',
                'excerpt' => 'Pellentesque massa nibh, commodo ut magna vitae, laoreet suscipit mi. Integer imperdiet nec elit ac consequat.',
                'image_path' => 'http://placehold.it/750x300',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
