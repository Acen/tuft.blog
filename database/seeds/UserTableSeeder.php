<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::find(1);
        if(is_null($user)){
            $user = new \App\User([
                'name'      => 'Zac',
                'email'     => 'zac@tuft.co.nz',
                'password'  => bcrypt(env('SUPER_PASSWORD'))
            ]);
            $user->save();
        }
    }
}
