<?php

use Illuminate\Database\Seeder;
use App\Models\AdminUserRole;
use Spatie\Permission\Models\Role;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        /** @var \App\Repositories\AdminUserRepositoryInterface $adminUserRepository */
        $adminUserRepository = \App::make('App\Repositories\AdminUserRepositoryInterface');
        /** @var \App\Repositories\UserRepositoryInterface $userRepository */
        $userRepository = \App::make('App\Repositories\UserRepositoryInterface');

        /** @var \App\Models\AdminUser $adminUser */
        $adminUser1 = $adminUserRepository->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => '123456',
        ]);

        $adminUser2 = $adminUserRepository->create([
            'name' => 'epl',
            'email' => 'epl@epl.com',
            'password' => '123456',
        ]);

        $adminUser3 = $adminUserRepository->create([
            'name' => 'kenh14',
            'email' => 'kenh14@kenh14.com',
            'password' => '123456',
        ]);

        $user1 = $userRepository->create([
            'name' => 'trungcheng',
            'email' => 'trungcheng@trungcheng.com',
            'password' => '123456',
        ]);

        $user2 = $userRepository->create([
            'name' => 'mytomtrung',
            'email' => 'mytomtrung@mytomtrung.com',
            'password' => '123456',
        ]);

        $user3 = $userRepository->create([
            'name' => 'raudua',
            'email' => 'raudua@raudua.com',
            'password' => '123456',
        ]);

        $adminUser1->assignRole(Role::findByName('superadmin', 'admins'));
        $adminUser2->assignRole(Role::findByName('subadmin', 'admins'));
        $adminUser3->assignRole(Role::findByName('subadmin', 'admins'));
        
        $user1->assignRole(Role::findByName('user', 'web'));
        $user2->assignRole(Role::findByName('user', 'web'));
        $user3->assignRole(Role::findByName('user', 'web'));

    }
}
