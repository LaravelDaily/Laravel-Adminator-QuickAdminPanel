<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$6an7csz5VY5vq/0qw/VJ0.YX4u4bHl6QKeoJT.Cqc.nncudsc70Hi',
                'remember_token' => null,
                'created_at'     => '2019-09-28 14:22:15',
                'updated_at'     => '2019-09-28 14:22:15',
            ],
        ];

        User::insert($users);

    }
}
