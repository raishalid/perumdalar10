<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'view-users',
            'edit-users',
            'assign-roles',
            'manage-permissions',
            // Tambahkan izin lainnya di sini
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }
        $role = Role::findByName('admin');
        $role->givePermissionTo('view-users', 'edit-users', 'assign-roles', 'manage-permissions');
    }
}
