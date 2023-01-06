<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleHasPermissionSeeder extends Seeder
{
    /**
     * Run the database Seeders.
     *
     * @return void
     */
    public function run()
    {
        // app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        // Admin
        $admin_permissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));

        // User
        $user_permissions = $admin_permissions->filter(function ($permission) {
            return substr($permission->name, 0, 5) != 'user_' &&
                substr($permission->name, 0, 5) != 'role_' &&
                substr($permission->name, 0, 11) != 'permission_'&&
                substr($permission->name, 0, 9) != 'category_'&&
                substr($permission->name, 0, 6) != 'brand_'&&
                substr($permission->name, 0, 9) != 'provider_'&&
                substr($permission->name, 0, 8) != 'persona_'&&
                substr($permission->name, 0, 7) != 'dealer_'&&
                substr($permission->name, 0, 8) != 'cliente_'&&
                substr($permission->name, 0, 11) != 'inventario_'&&
                substr($permission->name, 0, 8) != 'product_'&&
                substr($permission->name, 0, 19) != 'gestion_de_usuarios'&&
                substr($permission->name, 0, 19) != 'gestion_de_personas'&&
                substr($permission->name, 0, 21) != 'gestion_de_inventario'&&
                substr($permission->name, 0, 5) != 'sale_'&&
                substr($permission->name, 0, 9) != 'purchase_';
         
        });
        Role::findOrFail(2)->permissions()->sync($user_permissions);
    }
}