<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Membuat Role Admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        //Membuat Role Member
        $MemberRole = new Role();
        $MemberRole->name = "member";
        $MemberRole->display_name = "Member";
        $MemberRole->save();

        //Membuat Sample Admin
        $admin = new User();
        $admin->name = 'Admin Larapus';
        $admin->email = 'admin@gmail.com';
        $admin->password = berypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        //Membuat Sample Member
        $member = new User();
        $member->name = 'Sample Member';
        $member->email = 'member@gmail.com';
        $member->password = berypt('rahasia');
        $member->save();
        $member->attachRole($memberRole);
    }
}
