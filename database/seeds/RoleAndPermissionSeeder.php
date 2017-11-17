<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
	{
    	// Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        Permission::create(['name' => 'manage all']);
        Permission::create(['name' => 'update channel']);
        Permission::create(['name' => 'delete channel']);
        Permission::create(['name' => 'add video channel']);
        Permission::create(['name' => 'update video channel']);
        Permission::create(['name' => 'delete video channel']);

        // create roles and assign existing permissions
        $role = Role::create(['guard_name' => 'admins', 'name' => 'superadmin']);
        $role->givePermissionTo('manage all');

        $role = Role::create(['guard_name' => 'admins', 'name' => 'subadmin']);
        $role->givePermissionTo('update channel');
        $role->givePermissionTo('delete channel');
        $role->givePermissionTo('add video channel');
        $role->givePermissionTo('update video channel');
        $role->givePermissionTo('delete video channel');

        $role = Role::create(['guard_name' => 'web', 'name' => 'user']);
    }
}