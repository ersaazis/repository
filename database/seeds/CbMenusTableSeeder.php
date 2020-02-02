<?php

use Illuminate\Database\Seeder;

class CbMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cb_menus')->delete();
        
        \DB::table('cb_menus')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Users',
                'icon' => 'fa fa-users',
                'path' => 'users',
                'type' => 'path',
                'sort_number' => 1,
                'cb_modules_id' => NULL,
                'parent_cb_menus_id' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Halaman Depan',
                'icon' => 'fa fa-home',
                'path' => '../../',
                'type' => 'path',
                'sort_number' => 0,
                'cb_modules_id' => NULL,
                'parent_cb_menus_id' => NULL,
            ),
        ));
        
        
    }
}