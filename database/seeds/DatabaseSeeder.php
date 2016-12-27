<?php
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // clean the current table
        DB::table('users')->delete();
        DB::table('posts')->delete();

        //seed posts
        factory(App\Post::class,10)->create();

        //create a user to login with
        User:: create([
               'name'=>'Manish Kumar',
               'email' => 'manish@mail.com',
               'password' => bcrypt('password')
        	]);
    }
}
