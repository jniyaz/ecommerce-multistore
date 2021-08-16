<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin 1',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$l/FUUkcrPk79/9Pw7Om8C.TDfl6G9dFxj0OrxFDpeVt9lhSSJOt6u',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 =>
            array(
                'id' => 2,
                'role_id' => 1,
                'name' => 'Admin 2',
                'email' => 'admin2@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$l/FUUkcrPk79/9Pw7Om8C.TDfl6G9dFxj0OrxFDpeVt9lhSSJOt6u',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 =>
            array(
                'id' => 3,
                'role_id' => 2,
                'name' => 'Customer 1',
                'email' => 'customer@test.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$l/FUUkcrPk79/9Pw7Om8C.TDfl6G9dFxj0OrxFDpeVt9lhSSJOt6u',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 =>
            array(
                'id' => 4,
                'role_id' => 3,
                'name' => 'Seller 1',
                'email' => 'seller1@test.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$l/FUUkcrPk79/9Pw7Om8C.TDfl6G9dFxj0OrxFDpeVt9lhSSJOt6u',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 =>
            array(
                'id' => 5,
                'role_id' => 3,
                'name' => 'Seller 2',
                'email' => 'seller2@test.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$l/FUUkcrPk79/9Pw7Om8C.TDfl6G9dFxj0OrxFDpeVt9lhSSJOt6u',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));
    }
}
