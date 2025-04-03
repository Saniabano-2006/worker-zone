<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $workerRole = Role::firstOrCreate(['name' => 'worker']);
        $clientRole = Role::firstOrCreate(['name' => 'client']);

        // Create Admin User
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => '1234',
            
        ]);
        $admin->assignRole($adminRole);

        // Create Worker User
        $worker = User::create([
            'name' => 'Worker User',
            'email' => 'worker@example.com',
            'password' => '1234',
        ]);
        $worker->assignRole($workerRole);

        // Create client User
        $client = User::create([
            'name' => 'client User',
            'email' => 'client@example.com',
            'password' => '1234',
        ]);
        $client->assignRole($clientRole);

    }
}
