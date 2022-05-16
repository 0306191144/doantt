<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            'email' => 'minh1@gmail.com',
            'password' => bcrypt('minh1234'),
            'ten_user' => 'admin',
            'sodienthoai' => '0833832976',
            'diachi' => 'Nghệ an',
            'gioitinh' => 'nam',
        ];
        User::create($data);
    }
}