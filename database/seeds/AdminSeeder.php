<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User;
        $user->name = "Admin";
        $user->email = "robbyismyid1@gmail.com";
        $user->password = bcrypt("sdf749re11");
        $user->save();
    }
}
