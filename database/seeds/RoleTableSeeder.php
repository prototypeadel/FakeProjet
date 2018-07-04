<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Role::create([
          "name"=>"administrateur",
          "slug" => "admin"
      ]);
      Role::create([
          "name"=>"editeur",
          "slug"=>"editor",
      ]);
    }
}
