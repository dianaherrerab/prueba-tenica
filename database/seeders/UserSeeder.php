<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $request = [
            'name' => 'Administrador',
            'email' => 'test@test.com',
            'password' => bcrypt('test12345'),
        ];

        $admin = User::create($request);

        $admin->assignRole('administrador');

        $req = [
            'name' => 'Vendedor',
            'email' => 'vendedor@test.com',
            'password' => bcrypt('test12345'),
        ];

        $vendedor = User::create($req);

        $vendedor->assignRole('vendedor');

    }
}
