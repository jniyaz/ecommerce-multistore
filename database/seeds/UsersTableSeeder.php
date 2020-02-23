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
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Niyaz',
                'email' => 'niyaz.developer@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$l/FUUkcrPk79/9Pw7Om8C.TDfl6G9dFxj0OrxFDpeVt9lhSSJOt6u',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-23 05:40:46',
                'updated_at' => '2020-02-23 06:35:27',
            ),
        ));
        
        
    }
}