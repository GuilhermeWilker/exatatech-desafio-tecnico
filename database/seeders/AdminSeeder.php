<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Str::random(15);

        $user = User::create([
            'name' => 'Administrador',
            'email' => 'admin@exata.it',
            'password' => Hash::make($password),
            'superadmin' => true,
            'position' => '--',
            'state' => '--',
            'cellphone' => '--',
            'gender' => '--',
            ]);

        $output = '-------------------------------------------------';
        $output .= "\n   Administrador criado com sucesso!   ";
        $output .= "\n-------------------------------------------------";
        $output .= "\n   Email de acesso:  '$user->email'";
        $output .= "\n   Senha de acesso:  '$password'";
        $output .= "\n-------------------------------------------------";

        $this->command->info($output);
    }
}
