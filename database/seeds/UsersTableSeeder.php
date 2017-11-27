<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $test_user = [
            'name' => 'test',
            'email' => 'test@fs.com',
            'password' => bcrypt('fs.com'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        DB::table('users')->insert($test_user);
        factory(User::class, 20)->create();
    }
}
