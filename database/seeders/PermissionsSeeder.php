<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
  {
    $menus = [
      [
        "name" => "Dashbaord View",
        "permission" => "dashboard.view"
      ],
      [
        "name" => "Role View",
        "permission" => "role.view"
      ],
      [
        "name" => "Role Create",
        "permission" => "role.create"
      ],
      [
        "name" => "Update Role",
        "permission" => "role.update"
      ],
      [
        "name" => "Delete Role",
        "permission" => "role.delete"
      ],
      [
        "name" => "Permission View",
        "permission" => "permission.view"
      ],
      [
        "name" => "Permission Create",
        "permission" => "permission.create"
      ],
      [
        "name" => "Permission Update",
        "permission" => "permission.update"
      ],
      [
        "name" => "Permission Delete",
        "permission" => "permission.delete"
      ],
      [
        "name" => "User View",
        "permission" => "user.view"
      ],
      [
        "name" => "User Create",
        "permission" => "user.create"
      ],
      [
        "name" => "User Update",
        "permission" => "user.update"
      ],
      [
        "name" => "User Delete",
        "permission" => "user.delete"
      ],
      [
        "name" => "Provider View",
        "permission" => "provider.view"
      ],
      [
        "name" => "Provider Create",
        "permission" => "provider.create"
      ],
      [
        "name" => "Provider Update",
        "permission" => "provider.update"
      ],
      [
        "name" => "Provider Delete",
        "permission" => "provider.delete"
      ],
      [
        "name" => "Category View",
        "permission" => "category.view"
      ],
      [
        "name" => "Category Create",
        "permission" => "category.create"
      ],
      [
        "name" => "Category Update",
        "permission" => "category.update"
      ],
      [
        "name" => "Category Delete",
        "permission" => "category.delete"
      ],
      [
        "name" => "Service View",
        "permission" => "service.view"
      ],
      [
        "name" => "Service Create",
        "permission" => "service.create"
      ],
      [
        "name" => "Service Update",
        "permission" => "service.update"
      ],
      [
        "name" => "Service Delete",
        "permission" => "service.delete"
      ],
    ];  

    $this->createMenu($menus);
  }

  private function createMenu($datas)
  {
    foreach ($datas as $menu) {
      $permission = new Permission([
        'name' => $menu['name'],
        'permission' => $menu['permission'],
      ]);
      $permission->save();
    }
  }
}
