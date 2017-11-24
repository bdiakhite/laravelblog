<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //DB::statement('SET FOREIGN_KEY_CHECKS=0;');
      Schema::disableForeignKeyConstraints();
      DB::table('users')->truncate();
      Schema::enableForeignKeyConstraints();
      //DB::statement('SET FOREIGN_KEY_CHECKS=1;');

      DB::table('users')->insert([
          'firstname' => 'admin',
          'lastname' => 'admin',
          'name' => 'admin',
          'email' => 'admin@gmail.com',
          'password' => bcrypt('0000'),
          'status' => 1,
      ]);
        $this->command->info('User admin create with password 0000');

        factory(App\User::class, 1000)->create();
        $this->command->info('Users seeding completed!');
    }
}
