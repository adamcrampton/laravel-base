<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions.
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create page permissions.
        Permission::create(['name' => 'view pages']);
        Permission::create(['name' => 'edit pages']);
        Permission::create(['name' => 'delete pages']);
        Permission::create(['name' => 'publish pages']);
        Permission::create(['name' => 'unpublish pages']);

        // Create site user permissions.
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'add users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'suspend users']);

        // Create site admin permissions.
        Permission::create(['name' => 'access global options']);

        // Create roles and assign created permissions.
        
        $role = Role::create(['name' => 'viewer'])
            ->givePermissionTo(['view pages']);

        $role = Role::create(['name' => 'editor'])
            ->givePermissionTo(['view pages', 'edit pages', 'delete pages', 'publish pages', 'unpublish pages']);

        $role = Role::create(['name' => 'administrator']);
        $role->givePermissionTo(Permission::all());
    }
}
