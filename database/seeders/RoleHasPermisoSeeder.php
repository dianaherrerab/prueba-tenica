<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Seeder;

class RoleHasPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->AdminRolePermissions();
        $this->VendedorRolePermissions();
    }

    private function AdminRolePermissions()
    {
        $role = Role::find(1);
        $role->givePermissionTo('crud_usuarios');
        $role->givePermissionTo('crud_clientes');
    }

    private function VendedorRolePermissions()
    {
        $role = Role::find(2);
        $role->givePermissionTo('crud_clientes');
    }
}
