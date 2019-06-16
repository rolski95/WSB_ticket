<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user=new User();
       $user->name='rafalo';
       $user->email='rafalo@o2.pl';
       $user->password=bcrypt('Qwe123');
       $user->save();
       
       $user=new User();
       $user->name='hubertk';
       $user->email='hubertk@o2.pl';
       $user->password=bcrypt('Qwe123');
       $user->save();

       $user=new User();
       $user->name='mateuszr';
       $user->email='mateuszr@o2.pl';
       $user->password=bcrypt('Qwe123');
       $user->save();

       $user=new User();
       $user->name='damianj';
       $user->email='damianj@o2.pl';
       $user->password=bcrypt('Qwe123');
       $user->save();
    }
}
