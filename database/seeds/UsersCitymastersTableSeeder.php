<?php

use Illuminate\Database\Seeder;

class UsersCitymastersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('packagemasters')->delete();
        \DB::table('citymasters')->delete();
        \DB::table('users')->delete();
        
        factory(App\User::class, 5)->create()->each(function($u){
            $u->citymasters()
            ->saveMany(factory(App\Citymaster::class, rand(1,3))->make()
        )
            ->each(function($p) {
                $p->packagemasters()->saveMany(factory(App\Packagemaster::class, rand(1,3))->make());
        });

        });
    }
}
