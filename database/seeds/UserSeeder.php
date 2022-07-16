<?php
use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['name' => 'admin','email' => 'yoga@gmail.com','password' => bcrypt('yoga1234'),'role' => 'admin'];
        $data = ['name' => 'Minky','email' => 'kiadanika@gmail.com','password' => bcrypt('B15millah'),'role' => 'admin'];
        User::insert($data);
    }
}
