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
                'name' => 'Ersa Azis Mansyur',
                'email' => 'eam24maret@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kigY3tHQdS03bKpTtJdBeOODbOAZzjB4jfeHQYmIvsPrieWWSN/TS',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-02-01 15:20:15',
                'photo' => 'storage/files/2020/02/01/264b3824364e6a7a7180a4a3304a1c3e.png',
                'cb_roles_id' => 1,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
                'login_at' => '2020-02-02 16:53:53',
            ),
        ));
        
        
    }
}