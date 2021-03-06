<?php

use Illuminate\Database\Seeder;

class CbRolePrivilegesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cb_role_privileges')->delete();
        
        \DB::table('cb_role_privileges')->insert(array (
            0 => 
            array (
                'id' => 2,
                'cb_roles_id' => 1,
                'cb_menus_id' => 2,
                'can_browse' => 1,
                'can_create' => 1,
                'can_read' => 1,
                'can_update' => 1,
                'can_delete' => 1,
            ),
            1 => 
            array (
                'id' => 3,
                'cb_roles_id' => 1,
                'cb_menus_id' => 3,
                'can_browse' => 1,
                'can_create' => 1,
                'can_read' => 1,
                'can_update' => 1,
                'can_delete' => 1,
            ),
        ));
        
        
    }
}