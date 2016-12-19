<?php

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username'   => 'firstuser',
            'email'      => 'firstuser@example.com',
            'password'   => bcrypt('password'),
            'first_name' => 'First',
            'last_name'  => 'User',
            'country'    => 'ie',
            'city'       => 'Dublin',
            'biography'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorum, vero accusantium aut saepe laudantium repellendus molestias provident modi natus aliquam earum, vitae excepturi, quo vel ducimus beatae. Cumque, reiciendis!',
            'remember_token' => str_random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'username'   => 'seconduser',
            'email'      => 'seconduser@example.com',
            'password'   => bcrypt('password'),
            'first_name' => 'Second',
            'last_name'  => 'User',
            'country'    => 'es',
            'city'       => 'Pontevedra',
            'biography'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorum, vero accusantium aut saepe laudantium repellendus molestias provident modi natus aliquam earum, vitae excepturi, quo vel ducimus beatae. Cumque, reiciendis!',
            'remember_token' => str_random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'username'   => 'thirduser',
            'email'      => 'thirduser@example.com',
            'password'   => bcrypt('password'),
            'first_name' => 'Third',
            'last_name'  => 'User',
            'country'    => 'de',
            'city'       => 'Berlin',
            'biography'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorum, vero accusantium aut saepe laudantium repellendus molestias provident modi natus aliquam earum, vitae excepturi, quo vel ducimus beatae. Cumque, reiciendis!',
            'remember_token' => str_random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'username'   => 'fourthuser',
            'email'      => 'fourthuser@example.com',
            'password'   => bcrypt('password'),
            'first_name' => 'Fourth',
            'last_name'  => 'User',
            'country'    => 'no',
            'city'       => 'Oslo',
            'biography'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorum, vero accusantium aut saepe laudantium repellendus molestias provident modi natus aliquam earum, vitae excepturi, quo vel ducimus beatae. Cumque, reiciendis!',
            'remember_token' => str_random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if (App::environment() == 'local') {
            factory(User::class, 10)->create();
        }
    }
}
