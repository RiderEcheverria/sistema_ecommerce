<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database Seeders.
     *
     * @return void
     */
    public function run()
    {
        // spatie documentation
        // app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        $permissions = [
            'gestion_de_usuarios',
            'gestion_de_personas',
            'gestion_de_inventario',
            
            'permission_index',
            'permission_create',
            'permission_show',
            'permission_edit',
            'permission_destroy',

            'role_index',
            'role_create',
            'role_show',
            'role_edit',
            'role_destroy',

            'user_index',
            'user_create',
            'user_show',
            'user_edit',
            'user_destroy',

            'category_index',
            'category_create',
            'category_show',
            'category_edit',
            'category_destroy',

            'brand_index',
            'brand_create',
            'brand_show',
            'brand_edit',
            'brand_destroy',

            'provider_index',
            'provider_create',
            'provider_show',
            'provider_edit',
            'provider_destroy',

            'cliente_index',
            'cliente_create',
            'cliente_show',
            'cliente_edit',
            'cliente_destroy',

            'persona_index',
            'persona_create',
            'persona_show',
            'persona_edit',
            'persona_destroy',
            
            'dealer_index',
            'dealer_create',
            'dealer_show',
            'dealer_edit',
            'dealer_destroy',
            
            'product_index',
            'product_create',
            'product_show',
            'product_edit',
            'product_destroy',
            
            'purchase_index',
            'purchase_create',
            'purchase_show',
            'purchase_edit',
            'purchase_destroy',

        ];
        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }
    }
}